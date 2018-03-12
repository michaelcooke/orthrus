<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Industry extends Api
{
    public function __construct()
    {
        $this->base = 'industry';
    }

    protected function facilities()
    {
        $this->endpoint = 'facilities';
    }

    protected function costIndices()
    {
        $this->endpoint = 'systems';
    }
}
