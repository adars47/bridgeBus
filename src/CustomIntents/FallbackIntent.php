<?php
namespace App\CustomIntents;
class FallbackIntent implements IntentInterface
{

    /**
     * @var array
     */
    private $request;

    public function __construct(array $request)
    {
        $this->request = $request;
    }

    public function handle():array
    {
        return [
            "response" => [
                "outputSpeech" => [
                    "type" => "PlainText",
                    "text" => "Sorry, I don't understand what you are doing. Bye!"
                ],
                "shouldEndSession" => true
            ]
        ];
    }
}