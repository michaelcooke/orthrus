<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasSkills
{
    protected function attributes(): void
    {
        $this->endpoint = $this->id . '/attributes';
    }
    
    protected function skills(): void
    {
        $this->endpoint = $this->id . '/skills';
    }

    protected function skillQueue(): void
    {
        $this->endpoint = $this->id . '/skillqueue';
    }
}
