<?php 

namespace App\Services\Payments;

use App\DTO\CreateCreckoutDTO;

abstract class PaymentGateway
{
    abstract public function createCheckout(CreateCreckoutDTO $data): string;
}
