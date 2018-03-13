<?php

namespace MichaelCooke\Orthrus\Apis;

class Wars extends Api
{
    public function __construct()
    {
        $this->base = 'wars';
    }

    protected function get(): void
    {
        $this->verb = 'get';
    }

    protected function getWar(int $warId): void
    {
        $this->endpoint = $warId;
    }

    protected function warKillmails(int $warId): void
    {
        $this->endpoint = $warId . '/killmails';
    }
}
