<?php
namespace App;

class Response
{

    public function Response(array $response)
    {
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}