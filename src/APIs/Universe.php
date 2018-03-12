<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Universe extends Api
{

    public function __construct(Orthrus $orthrus, String $id = null)
    {
        $this->base = 'universe';
        $this->id = $id;
        $this->orthrus = $orthrus;
    }

    protected function getSchematic(Int $schematicId)
    {
        $this->verb = 'get';
        $this->endpoint = 'schematics/' . $schematicId;
    }
}
