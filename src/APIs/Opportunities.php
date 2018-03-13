<?php

namespace MichaelCooke\Orthrus\Apis;

class Opportunities extends Api
{
    public function __construct()
    {
        $this->base = 'opportunities';
    }

    protected function groups()
    {
        $this->endpoint = 'groups';
    }

    protected function group(Int $groupId)
    {
        $this->endpoint = 'groups/' . $groupId;
    }

    protected function tasks()
    {
        $this->endpoint = 'tasks';
    }

    protected function task(Int $taskId)
    {
        $this->endpoint = 'tasks/' . $taskId;
    }
}
