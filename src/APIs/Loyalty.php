<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Loyalty extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'loyalty';
        $this->orthrus = $orthrus;
    }

    protected function getOffers($id)
    {
        $this->endpoint = 'stores/' . $id . '/offers';
    }
}
