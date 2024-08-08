<?php

// app/Services/TranslationService.php
namespace App\Services;

use OpenAI;

class TranslationService
{
    protected $client;

    public function __construct()
    {
        $this->client = OpenAI::client(env('OPENAI_API_KEY'));
    }
    /*protected $client;*/

    /*public function __construct()
    {
        $apiKey = config('services.openai.api_key');

        if (empty($apiKey)) {
            throw new \Exception('OpenAI API key is not set.');
        }
        \Log::info('OpenAI API Key: ' . $apiKey);
        $this->client = new Client($apiKey);
    }*/


    public function translate($text, $targetLanguage)
    {
        $response = $this->client->chat()->create([
            'model' => 'gpt-4',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => "Translate the following English text to {$targetLanguage}:"
                ],
                [
                    'role' => 'user',
                    'content' => $text
                ]
            ],
        ]);

        return trim($response['choices'][0]['message']['content']);
    }

    /*public function translate1($text, $targetLanguage)
    {
        $response = $this->client->chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => "You are a translator. Translate the following text to {$targetLanguage}.",
                ],
                [
                    'role' => 'user',
                    'content' => $text,
                ],
            ],
        ]);

        return trim($response['choices'][0]['message']['content']);
    }*/
}

