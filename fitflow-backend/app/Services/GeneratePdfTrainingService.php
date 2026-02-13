<?php

namespace App\Services;

use App\Models\Order;
use Carbon\Carbon;
use Spatie\Browsershot\Browsershot;

class GeneratePdfTrainingService
{
    public function generate(Order $order): string
    {
        $fileName = 'training_' . $order->id . '.pdf';
        $directory = storage_path('app/pdfs');
        $path = $directory . '/' . $fileName;

        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }

        Carbon::setLocale(config('app.locale'));
        $html = view('pdf.pdf_training', [
            'user' => json_decode($order->profile),
            'data' => json_decode($order->plan_gpt),
        ])->render();


        Browsershot::html($html)
            ->noSandbox()
            ->setOption('args', [
                '--disable-setuid-sandbox',
                '--disable-dev-shm-usage',
            ])
            ->margins(0, 0, 0, 0)
            ->showBackground()
            ->setOption('printBackground', true)
            ->setOption('preferCSSPageSize', true)
            ->emulateMedia('print')
            ->savePdf($path);

        return $path;
    }
}
