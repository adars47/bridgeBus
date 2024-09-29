<?php
namespace App;
class Extractor
{
    public function extract()
    {
        $jsonData = file_get_contents('php://input');
        return json_decode($jsonData, true);
    }

}