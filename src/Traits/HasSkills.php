<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasSkills
{
    protected function getSkillQueue()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/skillqueue";
    }

    protected function getSkills()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/skills";
    }

    protected function getAttributes()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/attributes";
    }
}
