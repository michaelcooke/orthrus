<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasKillmails
{
    protected function killmails(): void
    {
        $this->endpoint = $this->id . '/killmails/recent';
    }
}
