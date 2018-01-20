<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasCorporations
{
    protected function getCorporations()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/corporations";
    }
}
