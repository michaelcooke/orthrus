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

    protected function getAttributes()
    {
        $this->endpoint = 'attributes';
    }

    protected function getAttribute($attribute)
    {
        $this->endpoint = 'attributes/' . $attribute;
    }

    protected function getEffects()
    {
        $this->endpoint = 'effects';
    }

    protected function getEffect($effect)
    {
        $this->endpoint = 'effects/' . $effect;
    }
}
