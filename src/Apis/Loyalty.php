<?php

namespace MichaelCooke\Orthrus\Apis;

class Loyalty extends Api
{
    public function __construct()
    {
        $this->base = 'loyalty';
    }

    protected function offers(Int $corporationId): void
    {
        $this->endpoint = 'stores/' . $corporationId . '/offers';
    }
}
