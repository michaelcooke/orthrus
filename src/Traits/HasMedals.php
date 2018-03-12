<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasMedals
{
    protected function getMedals()
    {
        $this->verb = 'get';
        $this->endpoint = $this->id . '/medals';
    }
}
