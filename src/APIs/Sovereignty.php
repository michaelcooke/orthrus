<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Sovereignty extends Api
{
    public function __construct()
    {
        $this->base = 'sovereignty';
    }

    protected function structures()
    {
        $this->endpoint = 'structures';
    }

    protected function campaigns()
    {
        $this->endpoint = 'campaigns';
    }

    protected function map()
    {
        $this->endpoint = 'map';
    }

    protected function systems()
    {
        $this->getMap();
    }
}
