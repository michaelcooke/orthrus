<?php

namespace MichaelCooke\Orthrus\Apis;

class Dogma extends Api
{
    public function __construct()
    {
        $this->base = 'dogma';
    }

    protected function attributes(): void
    {
        $this->endpoint = 'attributes';
    }

    protected function attribute(int $attributeId): void
    {
        $this->endpoint = 'attributes/' . $attributeId;
    }

    protected function effects(): void
    {
        $this->endpoint = 'effects';
    }

    protected function effect(int $effectId): void
    {
        $this->endpoint = 'effects/' . $effectId;
    }
}
