<?php

namespace MichaelCooke\Orthrus\Apis;

class Industry extends Api
{
    public function __construct()
    {
        $this->base = 'industry';
    }

    protected function costIndices(): void
    {
        $this->endpoint = 'systems';
    }

    protected function facilities(): void
    {
        $this->endpoint = 'facilities';
    }
}
