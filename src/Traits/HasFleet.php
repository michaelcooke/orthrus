<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasFleet
{
    protected function getFleet()
    {
        $this->endpoint = $this->id . '/fleet';
    }
}
