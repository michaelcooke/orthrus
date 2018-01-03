<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;
use MichaelCooke\Orthrus\Traits\HasId;
use MichaelCooke\Orthrus\Traits\HasContacts;
use MichaelCooke\Orthrus\Traits\HasBookmarks;

class Character extends Api
{
    use HasId, HasContacts, HasBookmarks;

    public function __construct(Orthrus $orthrus, String $id)
    {
        $this->base = "characters";
        $this->id = $id;
        $this->orthrus = $orthrus;
    }

    public function getChatChannels()
    {
    	return $this->orthrus->invoke("get", "/character/" . $this->id . "/" . "chat_channels/");
    }
}
