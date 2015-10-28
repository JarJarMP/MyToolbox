<?php

require_once('DefaultResponse.php');

class DefaultAction
{
    protected $response = null;

    public function run()
    {
        $this->response = new DefaultResponse();
        $this->response->run();
    }
}
