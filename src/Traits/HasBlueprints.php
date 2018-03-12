<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasBlueprints
{
    protected function getBlueprints()
    {
        $this->endpoint = $this->id . '/blueprints';
    }
}
