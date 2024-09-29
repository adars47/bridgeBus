<?php
namespace App\Intents;
class LaunchRequest
{

    /**
     * @var array
     */
    private $request;

    public function __construct(array $request)
    {
        $this->request = $request;
    }

    public function process(): array
    {
        return [
            "response" => [
                "outputSpeech" => [
                    "type" => "PlainText",
                    "text" => "Hey, whats up?"
                ],
                "shouldEndSession" => false
            ]
        ];
    }
}