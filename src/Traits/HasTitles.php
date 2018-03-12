<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasTitles
{
    protected function getTitles()
    {
        $this->verb = 'get';
        $this->endpoint = $this->id . '/titles';
    }
}
