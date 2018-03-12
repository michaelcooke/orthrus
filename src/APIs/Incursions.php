<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Incursions extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'incursions';
        $this->orthrus = $orthrus;
        $this->verb = 'get';
    }
}
