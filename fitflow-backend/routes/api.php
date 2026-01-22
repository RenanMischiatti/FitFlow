<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StripeController;
use App\Http\Controllers\Api\TestController;

Route::get('/', function () {
    return response()->json(['message' => 'API is running']);
});


// Rotas do Stripe
Route::post('/payment/start-checkout', [StripeController::class, 'createCheckoutSession']);
Route::post('/payment/check-status', [StripeController::class, 'checkStatus']);

// Webhook do Stripe
Route::post('/webhook/stripe', [StripeController::class, 'webhook']);