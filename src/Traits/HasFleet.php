<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasFleet
{
    protected function getFleet()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/fleet";
    }
}
