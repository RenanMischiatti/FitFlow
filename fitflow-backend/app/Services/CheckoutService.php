<?php 

namespace App\Services;

use App\DTO\CreateOrderDTO;
use App\Models\Order;
use App\Services\Payments\PaymentGateway;
use App\Services\Payments\StripeService;

class CheckoutService
{
    public function createOrder(CreateOrderDTO $data): Order
    {
        return Order::create($data->toArray());
    }
}
