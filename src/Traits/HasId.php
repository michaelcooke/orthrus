<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasId
{
    protected $id = null;

    protected function get(): void
    {
        $this->endpoint = $this->id;
    }
}
