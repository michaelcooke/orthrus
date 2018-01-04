<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;
use MichaelCooke\Orthrus\Traits\HasContacts;
use MichaelCooke\Orthrus\Traits\HasIdAndIndex;

class Alliance extends Api
{
	use HasIdAndIndex, HasContacts;
	
    public function __construct(Orthrus $orthrus, String $id = null)
    {
        $this->base = "/" . "alliances" . "/";
        $this->id = $id;
        $this->orthrus = $orthrus;
    }
}
