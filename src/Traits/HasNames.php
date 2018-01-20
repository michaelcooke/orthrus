<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasNames
{
    protected function getNames()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/names";
    }
}
