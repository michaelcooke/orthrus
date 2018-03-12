<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasStandings
{
    protected function getStandings()
    {
        $this->verb = 'get';
        $this->endpoint = $this->id . '/standings';
    }
}
