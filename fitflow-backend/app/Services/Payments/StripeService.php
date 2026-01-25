<?php 

namespace App\Services\Payments;

use Stripe\Stripe;
use Stripe\Webhook;
use RuntimeException;
use Stripe\Checkout\Session;
use UnexpectedValueException;
use App\DTO\CreateCreckoutDTO;
use App\DTO\EventWebhookStripeDTO;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Stripe\Exception\SignatureVerificationException;

class StripeService extends PaymentGateway
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    public function createCheckout(CreateCreckoutDTO $data): string
    {
        $session = Session::create([
            'payment_method_types' => ['card'], 
            'mode' => 'payment',
            'line_items' => [[
                'price_data' => [
                    'currency' => 'brl',
                    'product_data' => [
                        'name' => 'Plano Personalizado de Treino & Dieta',
                        'description' => 'Gerado com base nas suas respostas',
                    ],
                    'unit_amount' => $data->amount,
                ],
                'quantity' => 1,
            ]],
            'metadata' => [
                'order_id' => $data->orderId,
            ],
            'success_url' => config('app.frontend_url') . '/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => config('app.frontend_url') . '/cancel',
            'locale' => 'pt', 
            'payment_intent_data' => [
                'description' => 'Compra do Plano Personalizado de Treino & Dieta',
            ],
            'allow_promotion_codes' => true,
        ]);

        return $session->url;
    }

    public function getEventFromWebhook(EventWebhookStripeDTO $data)
    {
        try {
            $event = Webhook::constructEvent(
                $data->payload,
                $data->signature,
                $data->endpointSecret
            );

            Log::info('Stripe webhook received', [
                'type' => $event->type,
            ]);

            return $event;

        } catch (UnexpectedValueException $e) {
            // Payload inválido (JSON malformado)
            throw new UnexpectedValueException(
                'Invalid Stripe webhook payload: ' . $e->getMessage()
            );
        } catch (SignatureVerificationException $e) {
            // Assinatura inválida
            throw new SignatureVerificationException(
                'Invalid Stripe webhook signature: ' . $e->getMessage()
            );
        } catch (\Throwable $e) {
            // Erro inesperado
            throw new RuntimeException(
                'Unexpected error while processing Stripe webhook: ' . $e->getMessage()
            );
        }
    }

    public function getOrderByEvent($event)
    {
        $session = $event->data->object;
        $orderId = $session->metadata->order_id ?? null;

        if (!$orderId) {
            Log::warning('Stripe webhook without order_id');
            return null;
        }

        return Order::findOrFail($orderId);
    }
}
