<?php

namespace App\Modules;
class OnePiece
{
    public function getOnePiece()
    {
        $pointer = fopen("../onepiece.txt", "r");
        return fread($pointer, filesize("../onepiece.txt"));
    }
}
