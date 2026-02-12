<?php

namespace App\Jobs;

use App\Models\Order;
use App\Services\ChatGpt\ChatGPTPlanService;
use App\Services\GeneratePdfTrainingService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class GeneratePlanJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Quantidade máxima de tentativas
     */
    public int $tries = 3;

    /**
     * Delay entre tentativas (segundos)
     */
    public array $backoff = [60, 300, 600];

    public function __construct(
        public readonly int $orderId
    ) {}

    public function handle(
        ChatGPTPlanService $chatGPTService,
        GeneratePdfTrainingService $pdfService
    ): void {
        $order = Order::findOrFail($this->orderId);

        $planData = $chatGPTService->generatePlan($order);
        $pdfPath = $pdfService->generate($order);

        Log::info('GeneratePlanJob: Finished successfully', [
            'order_id' => $order->id,
            'pdf_path' => $pdfPath,
        ]);
    }

    /**
     * Caso o job falhe definitivamente
     */
    public function failed(\Throwable $exception): void
    {
        Log::error('GeneratePlanJob: Failed', [
            'order_id' => $this->orderId,
            'exception' => $exception->getMessage(),
        ]);
    }
}
