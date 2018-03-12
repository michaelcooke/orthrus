<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasFactionWarfareStats
{
    protected function getFactionWarfareStats()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/fw/stats";
    }
}
