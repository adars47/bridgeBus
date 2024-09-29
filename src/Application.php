<?php

namespace App;

class Application
{
    public $request = null;
    public $response = null;
    public $processor = null;
    public $responder = null;
    public $extractor = null;

    public function __construct()
    {
        $this->processor = new Processor();
        $this->responder = new Response();
        $this->extractor = new Extractor();
        $this->run();
    }

    public function run()
    {
        $this->request = $this->extractor->extract();
        $this->response = $this->processor->process($this->request);
        $this->responder->response($this->response);
    }

}