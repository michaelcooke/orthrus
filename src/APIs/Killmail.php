<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Killmail extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'killmails';
        $this->orthrus = $orthrus;
    }

    protected function get($id, $hash)
    {
        $this->verb = 'get';
        $this->endpoint = $id . '/' . $hash;
    }
}
