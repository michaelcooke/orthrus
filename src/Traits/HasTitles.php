<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasTitles
{
    protected function getTitles()
    {
        $this->endpoint = $this->id . '/titles';
    }
}
