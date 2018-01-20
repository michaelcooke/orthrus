<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;
use MichaelCooke\Orthrus\Traits\HasNames;
use MichaelCooke\Orthrus\Traits\HasContacts;
use MichaelCooke\Orthrus\Traits\HasIdAndIndex;
use MichaelCooke\Orthrus\Traits\HasCorporations;

class Alliance extends Api
{
    use HasIdAndIndex, HasCorporations, HasContacts, HasNames;

    public function __construct(Orthrus $orthrus, String $id = null)
    {
        $this->base = "alliances";
        $this->id = $id;
        $this->orthrus = $orthrus;
    }
}
