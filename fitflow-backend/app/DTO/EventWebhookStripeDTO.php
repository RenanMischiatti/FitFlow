<?php

namespace App\DTO;

class EventWebhookStripeDTO
{
    public function __construct(
        public readonly string $payload,
        public readonly string $signature,
        public readonly string $endpointSecret,
    ) {}

    public static function fromRequest($request): self
    {
        return new self(
            payload: $request->getContent(),
            signature: $request->header('Stripe-Signature'),
            endpointSecret: config('services.stripe.webhook_secret'),
        );
    }
}
