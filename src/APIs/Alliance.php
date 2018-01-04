<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;
use MichaelCooke\Orthrus\Traits\HasIndex;
use MichaelCooke\Orthrus\Traits\HasId;
use MichaelCooke\Orthrus\Traits\HasContacts;

class Alliance extends Api
{
    use HasIndex, HasId, HasContacts {
        HasIndex::get insteadof HasId;
    }

    public function __construct(Orthrus $orthrus, String $id = null)
    {
        $this->base = "/" . "alliances" . "/";
        $this->id = $id;
        $this->orthrus = $orthrus;
    }
}
