<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasKillmails
{
    protected function killmails()
    {
        $this->endpoint = $this->id . '/killmails/recent';
    }
}
