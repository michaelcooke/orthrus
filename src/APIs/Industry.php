<?php

namespace MichaelCooke\Orthrus\Apis;

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
