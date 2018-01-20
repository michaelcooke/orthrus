<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasIcon
{
    protected function getIcon()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/icons";
    }
}
