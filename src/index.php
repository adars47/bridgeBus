<?php
header('Content-Type: application/json');
$jsonData = file_get_contents('php://input');

$data = json_decode($jsonData, true);


if ($data === null) {
    //this is a new exception
    die;
}


$requestType = $data['request']['type'];

if ($requestType === 'LaunchRequest') {
    $response = [
        "response" => [
            "outputSpeech" => [
                "type" => "PlainText",
                "text" => "Hey, whats up?"
            ],
            "shouldEndSession" => false
        ]
    ];
    sendResponse($response);
}

if($requestType === 'IntentRequest')
{
    $intentName = $data['request']['intent']['name'];

}


if ($requestType === "AMAZON.StopIntent") {
    $response = [
        "response" => [
            "outputSpeech" => [
                "type" => "PlainText",
                "text" => "Bye!"
            ],
            "shouldEndSession" => true
        ]
    ];
    sendResponse($response);
}

if ($requestType === "onepiece") {
    include_once("OnePiece.php");
    $episode = getOnePiece();
    $response = [
        "response" => [
            "outputSpeech" => [
                "type" => "PlainText",
                "text" => "Current dub Episode is " . $episode
            ],
            "shouldEndSession" => true
        ]
    ];
    sendResponse($response);
}

function sendResponse(array $response)
{
    echo json_encode($response);
    die;
}

