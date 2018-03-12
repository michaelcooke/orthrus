<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasSkills
{
    protected function skillQueue()
    {
        $this->endpoint = $this->id . '/skillqueue';
    }

    protected function skills()
    {
        $this->endpoint = $this->id . '/skills';
    }

    protected function attributes()
    {
        $this->endpoint = $this->id . '/attributes';
    }
}
