<?php

namespace App\Http\Controllers\Api;

use App\DTO\CreateOrderDTO;
use App\DTO\CreateCreckoutDTO;
use App\Services\CheckoutService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\Payments\StripeService;
use App\Http\Requests\CreateCheckoutRequest;
use Illuminate\Support\Facades\Log;

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
}