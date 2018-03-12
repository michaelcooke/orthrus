<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasFleet
{
    protected function fleet()
    {
        $this->endpoint = $this->id . '/fleet';
    }
}
