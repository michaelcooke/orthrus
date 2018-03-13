<?php

namespace MichaelCooke\Orthrus\Apis;

class Status extends Api
{
    public function __construct()
    {
        $this->base = 'status';
        $this->verb = 'get';
    }
}
