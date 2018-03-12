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

    protected function facilities()
    {
        $this->endpoint = 'facilities';
    }

    protected function costIndices()
    {
        $this->endpoint = 'systems';
    }
}
