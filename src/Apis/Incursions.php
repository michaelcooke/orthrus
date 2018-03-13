<?php

namespace MichaelCooke\Orthrus\Apis;

class Incursions extends Api
{
    public function __construct()
    {
        $this->base = 'incursions';
        $this->verb = 'get';
    }
}
