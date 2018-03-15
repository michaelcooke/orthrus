<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasStandings
{
    protected function standings(): void
    {
        $this->endpoint = $this->id . '/standings';
    }
}
