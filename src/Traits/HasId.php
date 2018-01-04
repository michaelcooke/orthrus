<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasId
{
    protected $id = null;

    protected function get()
    {
        $this->verb = "get";
        $this->endpoint = $this->id;
    }
}
