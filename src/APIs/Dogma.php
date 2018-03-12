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
        $this->verb = 'get';
        $this->endpoint = 'attributes';
    }

    protected function getAttribute($attribute)
    {
        $this->verb = 'get';
        $this->endpoint = 'attributes/' . $attribute;
    }

    protected function getEffects()
    {
        $this->verb = 'get';
        $this->endpoint = 'effects';
    }

    protected function getEffect($effect)
    {
        $this->verb = 'get';
        $this->endpoint = 'effects/' . $effect;
    }
}
