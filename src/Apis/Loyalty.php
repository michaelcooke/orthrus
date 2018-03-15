<?php

namespace MichaelCooke\Orthrus\Apis;

class Loyalty extends Api
{
    public function __construct()
    {
        $this->base = 'loyalty';
    }

    protected function offers(int $corporationId): void
    {
        $this->endpoint = 'stores/' . $corporationId . '/offers';
    }
}
