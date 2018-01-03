<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasId
{
    private $id = null;

    public function get()
    {
        return $this->orthrus->invoke("get", "/" . $this->base . "/" . $this->id . "/");
    }
}
