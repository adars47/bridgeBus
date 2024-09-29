<?php
namespace App;
use App\Intents\IntentRequest;
use App\Intents\LaunchRequest;

class Processor
{
    public function process(array $request):array
    {
        $requestType = $request['request']['type'];

        switch ($requestType)
        {
            case 'IntentRequest':
                $intentRequest = new IntentRequest($request);
                return $intentRequest->process();
                break;

            case 'LaunchRequest':
                $launchRequest = new LaunchRequest($request);
                return $launchRequest->process();
                break;

            default:
                //send a generic bye response
                return [];
        }
    }

}