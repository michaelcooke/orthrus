<?php

namespace MichaelCooke\Orthrus\Apis;

class Sovereignty extends Api
{
    public function __construct()
    {
        $this->base = 'sovereignty';
    }

    protected function structures(): void
    {
        $this->endpoint = 'structures';
    }

    protected function campaigns(): void
    {
        $this->endpoint = 'campaigns';
    }

    protected function map(): void
    {
        $this->endpoint = 'map';
    }

    protected function systems(): void
    {
        $this->getMap();
    }
}
