<?php

namespace App\Services\ChatGpt;

use App\Models\Order;
use RuntimeException;
use Illuminate\Support\Facades\Log;

class ChatGPTPlanService extends ChatGPTService
{
    /**
     * Gera o plano de treino/dieta com base no perfil do pedido
     */
    public function generatePlan(Order $order): array
    {
        if (empty($order->profile)) {
            throw new RuntimeException('Order profile is empty');
        }

        if ($order->plan_gpt) {
            return json_decode($order->plan_gpt, true);
        }

        $prompt = $this->buildPrompt($order);

        Log::info('ChatGPTPlanService: Generating plan', [
            'order_id' => $order->id,
        ]);

        $response = $this->send($prompt);

        if (empty($response)) {
            throw new RuntimeException('Empty response from ChatGPT');
        }

        $json = $this->parseResponse($response);
        $order->update(['plan_gpt' => json_encode($json)]);

        return $json;
    }

    /**
     * Prompt específico e centralizado
     */
    private function buildPrompt(Order $order): string
    {
        return <<<PROMPT
            Sua função é gerar um plano altamente personalizado com base no perfil fornecido.

            REGRAS OBRIGATÓRIAS:
            - Retorne APENAS um JSON válido
            - Não utilize markdown
            - Não inclua textos explicativos fora do JSON
            - Não inclua comentários
            - Não invente dados ausentes

            PERFIL DO USUÁRIO (JSON):
            {$order->profile}
        PROMPT;
    }

    /**
     * Validação e normalização da resposta
     */
    private function parseResponse(string $response): array
    {
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            Log::error('ChatGPTPlanService: Invalid JSON returned', [
                'error' => json_last_error_msg(),
                'response' => $response,
            ]);

            throw new RuntimeException('Invalid JSON returned from ChatGPT');
        }

        return $data;
    }
}
