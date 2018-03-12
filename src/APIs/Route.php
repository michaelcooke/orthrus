<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Route extends Api
{
    public function __construct(Orthrus $orthrus, Int $originId, Int $destinationId)
    {
        $this->base = 'route';
        $this->orthrus = $orthrus;
        $this->endpoint = $originId . '/' . $destinationId;
    }
}
