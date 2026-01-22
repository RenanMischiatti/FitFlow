<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StripeController;
use App\Http\Controllers\Api\TestController;


// Rotas do Stripe
Route::post('/payment/start-checkout', [StripeController::class, 'createCheckoutSession']);
Route::post('/payment/check-status', [StripeController::class, 'checkStatus']);

// Webhook do Stripe
Route::post('/webhooks/stripe', [StripeController::class, 'webhook']);