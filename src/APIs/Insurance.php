<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Insurance extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'insurance';
        $this->orthrus = $orthrus;
    }

    protected function getPrices()
    {
        $this->endpoint = 'prices';
    }
}
