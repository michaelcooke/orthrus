<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasBlueprints
{
    protected function getBlueprints()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/blueprints";
    }
}
