<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Wars extends Api
{
    public function __construct()
    {
        $this->base = 'wars';
    }

    protected function get()
    {
        $this->verb = 'get';
    }

    protected function getWar(Int $warId)
    {
        $this->endpoint = $warId;
    }

    protected function warKillmails(Int $warId)
    {
        $this->endpoint = $warId . '/killmails';
    }
}
