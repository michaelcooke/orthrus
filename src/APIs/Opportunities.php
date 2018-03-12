<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Opportunities extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'opportunities';
        $this->orthrus = $orthrus;
    }

    protected function getGroups()
    {
        $this->endpoint = 'groups';
    }

    protected function getGroup(Int $groupId)
    {
        $this->endpoint = 'groups/' . $groupId;
    }

    protected function getTasks()
    {
        $this->endpoint = 'tasks';
    }

    protected function getTask(Int $taskId)
    {
        $this->endpoint = 'tasks/' . $taskId;
    }
}
