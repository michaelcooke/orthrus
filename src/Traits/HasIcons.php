<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasIcons
{
    protected function icons(): void
    {
        $this->endpoint = $this->id . '/icons';
    }
}
