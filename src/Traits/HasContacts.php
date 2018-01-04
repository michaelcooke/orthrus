<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasContacts
{
    protected function getContacts()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/contacts";
    }
}
