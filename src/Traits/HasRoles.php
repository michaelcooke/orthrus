<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasRoles
{
    protected function roles()
    {
        $this->endpoint = $this->id . '/roles';
    }
}
