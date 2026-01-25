<?php

namespace App\Console\Commands;

use App\Models\Order;
use App\Services\GeneratePdfTrainingService;
use Illuminate\Console\Command;
use App\Services\Pdf\PdfService;

class GeneratePDF extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'generate:pdf';

    /**
     * The console command description.
     */
    protected $description = 'Generate fitness PDF (treino + dieta) for a user';

    public function handle()
    {
        $this->info('🚀 Generating PDF...');

        try {
            $path = (new GeneratePdfTrainingService(
                order: Order::find(1)
            ))->generate();

            $this->info('✅ PDF generated successfully!');
            $this->info("📄 File: {$path}");

            return Command::SUCCESS;
        } catch (\Throwable $e) {
            $this->error('❌ Error generating PDF');
            $this->error($e->getMessage());

            return Command::FAILURE;
        }
    }
}
