<?php

namespace MichaelCooke\Orthrus\Apis;

class Insurance extends Api
{
    public function __construct()
    {
        $this->base = 'insurance';
    }

    protected function prices(): void
    {
        $this->endpoint = 'prices';
    }
}
