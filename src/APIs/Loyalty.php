<?php

namespace MichaelCooke\Orthrus\Apis;

class Loyalty extends Api
{
    public function __construct()
    {
        $this->base = 'loyalty';
    }

    protected function offers($id)
    {
        $this->endpoint = 'stores/' . $id . '/offers';
    }
}
