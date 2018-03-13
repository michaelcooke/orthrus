<?php

namespace MichaelCooke\Orthrus\Apis;

class Industry extends Api
{
    public function __construct()
    {
        $this->base = 'industry';
    }

    protected function facilities(): void
    {
        $this->endpoint = 'facilities';
    }

    protected function costIndices(): void
    {
        $this->endpoint = 'systems';
    }
}
