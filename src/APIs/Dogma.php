<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Dogma extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'dogma';
        $this->orthrus = $orthrus;
    }

    protected function attributes()
    {
        $this->endpoint = 'attributes';
    }

    protected function attribute($attribute)
    {
        $this->endpoint = 'attributes/' . $attribute;
    }

    protected function effects()
    {
        $this->endpoint = 'effects';
    }

    protected function effect($effect)
    {
        $this->endpoint = 'effects/' . $effect;
    }
}
