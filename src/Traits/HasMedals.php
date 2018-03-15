<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasMedals
{
    protected function medals(): void
    {
        $this->endpoint = $this->id . '/medals';
    }
}
