<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasRoles
{
    protected function getRoles()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/roles";
    }
}
