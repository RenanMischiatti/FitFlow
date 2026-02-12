<?php

namespace App\Http\Controllers\Api;

use App\DTO\CreateOrderDTO;
use App\DTO\CreateCreckoutDTO;
use App\DTO\EventWebhookStripeDTO;
use App\Enum\StripeWebhookEvent;
use App\Services\CheckoutService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\Payments\StripeService;
use App\Http\Requests\CreateCheckoutRequest;
use App\Http\Requests\WebhookStripeRequest;
use App\Jobs\GeneratePlanJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Contracts\EventDispatcher\Event;

class StripeController extends Controller
{
    public function __construct(
        public CheckoutService $checkoutService,
        public StripeService $stripeService
    ) {}

    public function createCheckoutSession(CreateCheckoutRequest $request)
    {
        try {
            DB::beginTransaction();

            $order = $this->checkoutService->createOrder(
                CreateOrderDTO::fromArray($request->input('formData'))
            );

            $checkoutSessionUrl = $this->stripeService->createCheckout(
                CreateCreckoutDTO::fromArray([
                    'order_id' => $order->id,
                    'amount'   => $order->price,
                ])
            );

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

        Log::info("Checkout session created successfully.", [
            'order_id' => $order->id,
            'checkout_url' => $checkoutSessionUrl,
        ]);

        return response()->json([
            'checkout_url' => $checkoutSessionUrl,
        ]);
    }

    public function webhook(WebhookStripeRequest $request)
    {
        $event = $this->stripeService->getEventFromWebhook(
            EventWebhookStripeDTO::fromRequest($request)
        );

        if ($event->type !== StripeWebhookEvent::CHECKOUT_SESSION_COMPLETED->value) {
            return response()->json(['ignored' => true]);
        }

        $order = $this->stripeService->getOrderByEvent($event);

        if ($order->isPaid()) {
            return response()->json(['status' => 'already_processed']);
        }

        $order->markAsPaid();

        GeneratePlanJob::dispatch($order->id);

        return response()->json(['status' => 'success']);
    }

        

}