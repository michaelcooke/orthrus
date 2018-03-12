<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Status extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'status';
        $this->orthrus = $orthrus;
        $this->verb = 'get';
    }
}
