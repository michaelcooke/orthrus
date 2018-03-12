<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasIcons
{
    protected function getIcons()
    {
        $this->endpoint = $this->id . '/icons';
    }
}
