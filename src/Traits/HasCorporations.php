<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasCorporations
{
    protected function corporations(): void
    {
        $this->endpoint = $this->id . '/corporations';
    }
}
