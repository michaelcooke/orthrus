<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class FactionWarfare extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'fw';
        $this->orthrus = $orthrus;
    }

    protected function getWars()
    {
        $this->endpoint = 'wars';
    }

    protected function getStats()
    {
        $this->endpoint = 'stats';
    }

    protected function getSystems()
    {
        $this->endpoint = 'systems';
    }

    protected function getLeaderboards()
    {
        $this->endpoint = 'leaderboards';
    }

    protected function getCharacterLeaderboards()
    {
        $this->endpoint = 'leaderboards/characters';
    }

    protected function getCorporationLeaderboards()
    {
        $this->endpoint = 'leaderboards/corporations';
    }
}
