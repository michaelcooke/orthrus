<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasContacts
{
    public function getContacts()
    {
        return $this->orthrus->invoke("get", "/" . $this->base . "/" . $this->id . "/" . "contacts/");
    }
}
