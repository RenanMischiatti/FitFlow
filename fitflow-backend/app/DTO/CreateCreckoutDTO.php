<?php

namespace App\DTO;

class CreateCreckoutDTO
{
    public function __construct(
        public readonly int $orderId,
        public readonly int $amount,
    ) {}

    /**
     * Factory para criar o DTO a partir de um array
     */
    public static function fromArray(array $data): self
    {
        return new self(
            orderId: (int) $data['order_id'],
            amount: (int) $data['amount'],
        );
    }

    /**
     * Converte o DTO para array (formato compatível com StripeService)
     */
    public function toArray(): array
    {
        return [
            'order_id' => $this->orderId,
            'amount' => $this->amount,
        ];
    }
}
