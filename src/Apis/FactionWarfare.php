<?php

namespace MichaelCooke\Orthrus\Apis;

class FactionWarfare extends Api
{
    public function __construct()
    {
        $this->base = 'fw';
    }

    protected function wars(): void
    {
        $this->endpoint = 'wars';
    }

    protected function stats(): void
    {
        $this->endpoint = 'stats';
    }

    protected function systems(): void
    {
        $this->endpoint = 'systems';
    }

    protected function leaderboards(): void
    {
        $this->endpoint = 'leaderboards';
    }

    protected function characterLeaderboards(): void
    {
        $this->endpoint = 'leaderboards/characters';
    }

    protected function corporationLeaderboards(): void
    {
        $this->endpoint = 'leaderboards/corporations';
    }
}
