<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Wars extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'wars';
        $this->orthrus = $orthrus;
    }

    protected function get()
    {
        $this->verb = 'get';
    }

    protected function getWar(Int $warId)
    {
        $this->verb = 'get';
        $this->endpoint = $warId;
    }

    protected function getWarKillmails(Int $warId)
    {
        $this->verb = 'get';
        $this->endpoint = $warId . '/killmails';
    }
}
