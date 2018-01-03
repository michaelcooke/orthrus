<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasEditableId
{
    private $id = null;

    public function get()
    {
        return $this->orthrus->invoke("get", $this->base . $this->id . "/");
    }

    public function put( $new_settings )
    {
    	return $this->orthrus->invoke("put", $this->base . $this->id . "/")->setBody(json_encode(["new_settings" => $new_settings]));
    }
}
