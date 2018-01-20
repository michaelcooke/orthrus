<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasIcon
{
    protected function getIcons()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/icons";
    }
}
