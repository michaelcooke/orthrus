<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasIcons
{
    protected function getIcons()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/icons";
    }
}
