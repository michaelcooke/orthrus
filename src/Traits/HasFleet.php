<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasFleet
{
    protected function fleet(): void
    {
        $this->endpoint = $this->id . '/fleet';
    }
}
