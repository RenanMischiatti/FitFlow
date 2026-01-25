<?php 

namespace App\Services;

use App\Models\Order;

class GeneratePdfTrainingService
{
    public function __construct(
        public Order $order
    ) {}


    public function generate(): string
    {
        $pdf = PDF::loadView('pdf.pdf_training', [
            'order' => $this->order,
        ]);

        return $pdf->output();
    }

}