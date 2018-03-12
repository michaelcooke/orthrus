<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Insurance extends Api
{
    public function __construct()
    {
        $this->base = 'insurance';
    }

    protected function prices()
    {
        $this->endpoint = 'prices';
    }
}
