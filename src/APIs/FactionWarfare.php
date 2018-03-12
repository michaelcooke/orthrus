<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class FactionWarfare extends Api
{
    public function __construct()
    {
        $this->base = 'fw';
    }

    protected function wars()
    {
        $this->endpoint = 'wars';
    }

    protected function stats()
    {
        $this->endpoint = 'stats';
    }

    protected function systems()
    {
        $this->endpoint = 'systems';
    }

    protected function leaderboards()
    {
        $this->endpoint = 'leaderboards';
    }

    protected function characterLeaderboards()
    {
        $this->endpoint = 'leaderboards/characters';
    }

    protected function corporationLeaderboards()
    {
        $this->endpoint = 'leaderboards/corporations';
    }
}
