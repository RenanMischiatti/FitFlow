<?php

namespace App\Console\Commands;

use App\Jobs\GeneratePlanJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GeneratePDF extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'generate:pdf {orderId=1}';

    /**
     * The console command description.
     */
    protected $description = 'Generate fitness PDF (treino + dieta) for a user';

    public function handle()
    {
        $orderId = (int) $this->argument('orderId');

        $this->info('🚀 Dispatching GeneratePlanJob...');

        try {
            // 1️⃣ Dispara o job
            GeneratePlanJob::dispatch($orderId)->onQueue('plans');

            $this->info('⏳ Processing queue...');

            // 2️⃣ Executa UM job da fila
            Artisan::call('queue:work', [
                '--queue' => 'plans',
                '--once'  => true,
            ]);

            $this->info('✅ Job processed successfully!');

            return Command::SUCCESS;
        } catch (\Throwable $e) {
            $this->error('❌ Error generating PDF');
            $this->error($e->getMessage());

            return Command::FAILURE;
        }
    }
}
