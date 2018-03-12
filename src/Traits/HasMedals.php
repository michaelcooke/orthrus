<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasMedals
{
    protected function medals()
    {
        $this->endpoint = $this->id . '/medals';
    }
}
