<?php

namespace App\Enum;

enum StripeWebhookEvent: string
{
    case CHECKOUT_SESSION_COMPLETED = 'checkout.session.completed';
}
