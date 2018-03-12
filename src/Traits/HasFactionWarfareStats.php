<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasFactionWarfareStats
{
    protected function factionWarfareStats()
    {
        $this->endpoint = $this->id . '/fw/stats';
    }
}
