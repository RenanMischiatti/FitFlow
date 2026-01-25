<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class WebhookStripeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [];
    }

    protected function prepareForValidation(): void
    {
        $payload = $this->getContent();
        $signature = $this->header('Stripe-Signature');

        if (empty($payload)) {
            throw ValidationException::withMessages([
                'payload' => 'Payload do webhook Stripe está vazio.',
            ]);
        }

        if (!$signature) {
            throw ValidationException::withMessages([
                'stripe_signature' => 'Header Stripe-Signature não encontrado.',
            ]);
        }

        // adiciona no request para uso posterior
        $this->merge([
            'stripe_payload' => $payload,
            'stripe_signature' => $signature,
        ]);
    }
}
