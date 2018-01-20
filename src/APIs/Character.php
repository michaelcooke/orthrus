<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;
use MichaelCooke\Orthrus\Traits\HasId;
use MichaelCooke\Orthrus\Traits\HasCalendar;
use MichaelCooke\Orthrus\Traits\HasContacts;
use MichaelCooke\Orthrus\Traits\HasBookmarks;

class Character extends Api
{
    use HasId,
        HasCalendar,
        HasContacts,
        HasBookmarks;

    public function __construct(Orthrus $orthrus, String $id)
    {
        $this->base = "characters";
        $this->id = $id;
        $this->orthrus = $orthrus;
    }

    protected function getChatChannels()
	{
	    $this->verb = "get";
	    $this->endpoint = $this->id . "/chat_channels";
	}
}
