<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasRoles
{
    protected function getRoles()
    {
        $this->endpoint = $this->id . '/roles';
    }
}
