<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasIndex
{
    public function get()
    {
        if ($this->id == null) {
            return $this->orthrus->invoke("get", "/" . $this->base . "/");
        } else {
            return $this->orthrus->invoke("get", "/" . $this->base . "/" . $this->id . "/");
        }
    }
}
