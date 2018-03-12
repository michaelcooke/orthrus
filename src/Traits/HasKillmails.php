<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasKillmails
{
    protected function getKillmails()
    {
        $this->endpoint = $this->id . '/killmails/recent';
    }
}
