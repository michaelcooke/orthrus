<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasEditableId
{
    private $id = null;

    protected function get(): void
    {
        $this->endpoint = $this->id;
    }

    protected function put(array $settings): void
    {
        $this->verb = 'put';
        $this->endpoint = $this->id;
        $this->body = $settings;
    }
}
