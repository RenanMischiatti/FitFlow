<?php 

namespace App\Services\Payments;

use App\DTO\CreateCreckoutDTO;
use Stripe\Stripe;
use Stripe\Checkout\Session;

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
}
