<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasTitles
{
    protected function titles(): void
    {
        $this->endpoint = $this->id . '/titles';
    }
}
