<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Industry extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'industry';
        $this->orthrus = $orthrus;
    }

    protected function getFacilities()
    {
        $this->verb = 'get';
        $this->endpoint = 'facilities';
    }

    protected function getCostIndices()
    {
        $this->verb = 'get';
        $this->endpoint = 'systems';
    }
}
