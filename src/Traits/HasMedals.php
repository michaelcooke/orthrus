<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasMedals
{
    protected function getMedals()
    {
        $this->endpoint = $this->id . '/medals';
    }
}
