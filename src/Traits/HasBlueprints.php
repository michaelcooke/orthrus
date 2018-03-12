<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasBlueprints
{
    protected function blueprints()
    {
        $this->endpoint = $this->id . '/blueprints';
    }
}
