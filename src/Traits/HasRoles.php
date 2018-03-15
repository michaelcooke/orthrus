<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasRoles
{
    protected function roles(): void
    {
        $this->endpoint = $this->id . '/roles';
    }
}
