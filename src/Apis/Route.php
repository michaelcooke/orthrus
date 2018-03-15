<?php

namespace MichaelCooke\Orthrus\Apis;

class Route extends Api
{
    public function __construct(int $originId, int $destinationId): void
    {
        $this->base = 'route';
        $this->endpoint = $originId . '/' . $destinationId;
    }
}
