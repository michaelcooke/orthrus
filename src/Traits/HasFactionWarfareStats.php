<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasFactionWarfareStats
{
    protected function getFactionWarfareStats()
    {
        $this->endpoint = $this->id . '/fw/stats';
    }
}
