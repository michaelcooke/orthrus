<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Universe extends Api
{

    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'universe';
        $this->orthrus = $orthrus;
    }

    protected function getSchematic(Int $schematicId)
    {
        $this->verb = 'get';
        $this->endpoint = 'schematics/' . $schematicId;
    }
}
