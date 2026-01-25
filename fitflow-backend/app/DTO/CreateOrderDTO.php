<?php

namespace App\DTO;

use App\Models\Order;

class CreateOrderDTO
{
    public function __construct(
        public readonly string $data,
        public readonly string $status,
        public readonly float $price,
    ) {}

    /**
     * Factory para criar o DTO a partir do formData
     */
    public static function fromArray(array $formData): self
    {
        return new self(
            data: self::getDataFromForm($formData),
            status: Order::STATUS_PENDING,
            price: Order::DEFAULT_PRICE,
        );
    }

    /**
     * Converte o DTO para array no formato do Model
     */
    public function toArray(): array
    {
        return [
            'data' => $this->data,
            'status' => $this->status,
            'price' => $this->price,
        ];
    }

    protected static function getDataFromForm(array $formData): string
    {
        return json_encode($formData);
    }
}
