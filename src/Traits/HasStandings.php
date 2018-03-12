<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasStandings
{
    protected function getStandings()
    {
        $this->endpoint = $this->id . '/standings';
    }
}
