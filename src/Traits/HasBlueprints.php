<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasBlueprints
{
    protected function blueprints(): void
    {
        $this->endpoint = $this->id . '/blueprints';
    }
}
