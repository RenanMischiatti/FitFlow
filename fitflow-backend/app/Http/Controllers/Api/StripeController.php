<?php

namespace App\Http\Controllers\Api;

use App\DTO\CreateOrderDTO;
use App\DTO\CreateCreckoutDTO;
use App\Services\CheckoutService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\Payments\StripeService;
use App\Http\Requests\CreateCheckoutRequest;
use Illuminate\Http\Request;
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

    public function webhook(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $endpointSecret = config('services.stripe.webhook_secret');

        try {
            // ✅ Verifica assinatura do webhook (segurança)
            $event = \Stripe\Webhook::constructEvent(
                $payload,
                $sigHeader,
                $endpointSecret
            );
        } catch (\UnexpectedValueException $e) {
            Log::error('Stripe webhook invalid payload', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Invalid payload'], 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            Log::error('Stripe webhook invalid signature', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        Log::info('Stripe webhook received', [
            'type' => $event->type,
        ]);

        // ✅ Evento principal: pagamento concluído
        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;

            $orderId = $session->metadata->order_id ?? null;

            if (!$orderId) {
                Log::warning('Stripe webhook without order_id');
                return response()->json(['error' => 'Order ID not found'], 400);
            }

            DB::transaction(function () use ($orderId, $session) {
                $order = \App\Models\Order::find($orderId);

                if (!$order) {
                    Log::error('Order not found', ['order_id' => $orderId]);
                    return;
                }

                // ✅ Atualiza status do pedido
                $order->update([
                    'status' => 'paid',
                    // 'stripe_session_id' => $session->id,
                    // 'stripe_payment_intent' => $session->payment_intent,
                ]);
            });

            Log::info('Order paid successfully', [
                'order_id' => $orderId,
                'session_id' => $session->id,
            ]);
        }

        return response()->json(['status' => 'success']);
    }

}