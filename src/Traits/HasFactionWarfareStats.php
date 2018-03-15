<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasFactionWarfareStats
{
    protected function factionWarfareStats(): void
    {
        $this->endpoint = $this->id . '/fw/stats';
    }
}
