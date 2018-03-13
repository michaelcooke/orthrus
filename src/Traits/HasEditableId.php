<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasEditableId
{
    private $id = null;

    protected function get()
    {
        $this->endpoint = $this->id;
    }

    protected function put($new_settings)
    {
        $this->verb = 'put';
        $this->endpoint = $this->id;
        $this->body = $new_settings;
    }
}
