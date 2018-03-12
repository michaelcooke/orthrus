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
        $this->endpoint = 'structures';
    }

    protected function getCampaigns()
    {
        $this->endpoint = 'campaigns';
    }

    protected function getMap()
    {
        $this->endpoint = 'map';
    }

    protected function getSystems()
    {
        $this->getMap();
    }
}
