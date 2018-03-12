<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasCorporations
{
    protected function corporations()
    {
        $this->endpoint = $this->id . '/corporations';
    }
}
