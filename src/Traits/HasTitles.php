<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasTitles
{
    protected function titles()
    {
        $this->endpoint = $this->id . '/titles';
    }
}
