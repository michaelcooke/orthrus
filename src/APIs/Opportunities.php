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
        $this->verb = 'get';
        $this->endpoint = 'groups';
    }

    protected function getGroup(Int $groupId)
    {
        $this->verb = 'get';
        $this->endpoint = 'groups/' . $groupId;
    }

    protected function getTasks()
    {
        $this->verb = 'get';
        $this->endpoint = 'tasks';
    }

    protected function getTask(Int $taskId)
    {
        $this->verb = 'get';
        $this->endpoint = 'tasks/' . $taskId;
    }
}
