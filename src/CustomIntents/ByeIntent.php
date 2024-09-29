<?php

namespace App\CustomIntents;

class ByeIntent implements IntentInterface
{

    /**
     * @var array
     */
    private $request;

    public function __construct(array $request)
    {
        $this->request = $request;
    }

    public function handle(): array
    {
        return [
            "response" => [
                "outputSpeech" => [
                    "type" => "PlainText",
                    "text" => "Nice talking to you. Bye!"
                ],
                "shouldEndSession" => true
            ]
        ];
    }
}