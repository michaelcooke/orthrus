<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class FactionWarfare extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = "fw";
        $this->orthrus = $orthrus;
    }

    protected function getWars()
    {
        $this->verb = "get";
        $this->endpoint = "wars";
    }

    protected function getStats()
    {
        $this->verb = "get";
        $this->endpoint = "stats";
    }

    protected function getSystems()
    {
        $this->verb = "get";
        $this->endpoint = "systems";
    }

    protected function getLeaderboards()
    {
        $this->verb = "get";
        $this->endpoint = "leaderboards";
    }

    protected function getCharacterLeaderboards()
    {
        $this->verb = "get";
        $this->endpoint = "leaderboards/characters";
    }

    protected function getCorporationLeaderboards()
    {
        $this->verb = "get";
        $this->endpoint = "leaderboards/corporations";
    }
}
