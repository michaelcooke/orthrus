<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Sovereignty extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'sovereignty';
        $this->orthrus = $orthrus;
    }

    protected function getStructures()
    {
        $this->verb = 'get';
        $this->endpoint = 'structures';
    }

    protected function getCampaigns()
    {
        $this->verb = 'get';
        $this->endpoint = 'campaigns';
    }

    protected function getMap()
    {
        $this->verb = 'get';
        $this->endpoint = 'map';
    }

    protected function getSystems()
    {
        $this->getMap();
    }
}
