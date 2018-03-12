<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasCorporations
{
    protected function getCorporations()
    {
        $this->endpoint = $this->id . '/corporations';
    }
}
