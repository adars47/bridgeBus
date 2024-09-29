<?php

namespace App\CustomIntents;

interface IntentInterface
{
    public function __construct(array $request);
    public function handle():array;
}