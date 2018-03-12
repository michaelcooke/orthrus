<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasStandings
{
    protected function standings()
    {
        $this->endpoint = $this->id . '/standings';
    }
}
