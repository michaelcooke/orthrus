<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;
use MichaelCooke\Orthrus\Traits\HasId;
use MichaelCooke\Orthrus\Traits\HasContacts;
use MichaelCooke\Orthrus\Traits\HasBookmarks;
use MichaelCooke\Orthrus\Traits\HasSearch;

class Character extends Api
{
    use HasId, HasBookmarks, HasContacts, HasSearch;

    public function __construct(Orthrus $orthrus, String $id)
    {
        $this->base = "characters";
        $this->id = $id;
        $this->orthrus = $orthrus;
    }
}
