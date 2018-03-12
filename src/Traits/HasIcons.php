<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasIcons
{
    protected function icons()
    {
        $this->endpoint = $this->id . '/icons';
    }
}
