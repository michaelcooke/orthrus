<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

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
