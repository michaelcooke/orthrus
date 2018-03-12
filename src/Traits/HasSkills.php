<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasSkills
{
    protected function getSkillQueue()
    {
        $this->endpoint = $this->id . '/skillqueue';
    }

    protected function getSkills()
    {
        $this->endpoint = $this->id . '/skills';
    }

    protected function getAttributes()
    {
        $this->endpoint = $this->id . '/attributes';
    }
}
