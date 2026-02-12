<?php

namespace App\Services\ChatGpt;

use OpenAI\Laravel\Facades\OpenAI;
use Exception;

class ChatGPTService
{
    protected string $assistantId;

    public function __construct()
    {
        $this->assistantId = config('openai.assistant_plan_id');
    }

    /**
     * Envia mensagem para o Assistant
     * @param string $message
     * @param string|null $threadId
     * @return string
     */
    public function send(string $message, ?string $threadId = null): string
    {
        try {
            $threadId = $threadId ?? $this->createThread();

            $this->sendMessage($threadId, $message);

            $runId = $this->runAssistant($threadId);

            $this->waitForRun($threadId, $runId);

            return $this->getLastAssistantMessage($threadId);
        } catch (Exception $e) {
            throw new Exception('OpenAI Assistant error: ' . $e->getMessage());
        }
    }

    private function createThread(): string
    {
        $thread = OpenAI::threads()->create([]);
        return $thread->id;
    }

    private function sendMessage(string $threadId, string $message): void
    {
        OpenAI::threads()->messages()->create($threadId, [
            'role' => 'user',
            'content' => $message,
        ]);
    }

    private function runAssistant(string $threadId): string
    {
        $run = OpenAI::threads()->runs()->create($threadId, [
            'assistant_id' => $this->assistantId,
        ]);

        return $run->id;
    }

    private function waitForRun(string $threadId, string $runId): void
    {
        do {
            sleep(1);

            $run = OpenAI::threads()->runs()->retrieve($threadId, $runId);

        } while (in_array($run->status, ['queued', 'in_progress']));
    }

    private function getLastAssistantMessage(string $threadId): string
    {
        $messages = OpenAI::threads()->messages()->list($threadId);

        foreach ($messages->data as $msg) {
            if ($msg->role === 'assistant') {
                return $msg->content[0]->text->value ?? '';
            }
        }

        return '';
    }
}
