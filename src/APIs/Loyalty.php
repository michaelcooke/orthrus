<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

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
