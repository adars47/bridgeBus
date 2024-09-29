<?php

namespace App\CustomIntents;

class OnePiece implements IntentInterface
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
        $module = new \App\Modules\OnePiece();
        $episode = $module->getOnePiece();
        return [
            "response" => [
                "outputSpeech" => [
                    "type" => "PlainText",
                    "text" => "The last released episode is ".$episode
                ],
                "shouldEndSession" => true
            ]
        ];
    }
}