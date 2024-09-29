<?php
namespace App\Intents;
use App\CustomIntents\FallbackIntent;
use App\CustomIntents\OnePiece;

class IntentRequest
{
    /**
     * @var array
     */
    private $request;
    private $intentType = null;

    public function __construct(array $request)
    {
        $this->request = $request;
        $this->intentType = $this->request['request']['intent']['name'];
    }

    public function process(): array{
        switch ($this->intentType){
            case 'AMAZON.FallbackIntent':
            case 'AMAZON.StopIntent':
            case 'AMAZON.CancelIntent':
            case 'AMAZON.HelpIntent':
            case 'AMAZON.NavigateHomeIntent':
            default:
                $intent = new FallbackIntent($this->request);
                return $intent->handle();
                break;

            case 'onepiece':
                $intent = new OnePiece($this->request);
                return $intent->handle();
                break;
        }
    }

}