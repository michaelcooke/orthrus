<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;
use MichaelCooke\Orthrus\Traits\HasId;
use MichaelCooke\Orthrus\Traits\HasAssets;
use MichaelCooke\Orthrus\Traits\HasContacts;
use MichaelCooke\Orthrus\Traits\HasBookmarks;

class Corporation extends Api
{
    use HasId, HasAssets, HasBookmarks, HasContacts;

    public function __construct(Orthrus $orthrus, String $id)
    {
        $this->base = "corporations";
        $this->id = $id;
        $this->orthrus = $orthrus;
    }
}
