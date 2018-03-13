<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasSkills
{
    protected function skillQueue(): void
    {
        $this->endpoint = $this->id . '/skillqueue';
    }

    protected function skills(): void
    {
        $this->endpoint = $this->id . '/skills';
    }

    protected function attributes(): void
    {
        $this->endpoint = $this->id . '/attributes';
    }
}
