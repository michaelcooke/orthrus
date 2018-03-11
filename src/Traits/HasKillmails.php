<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasKillmails
{
    protected function getKillmails()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/killmails/recent";
    }
}
