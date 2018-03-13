<?php

namespace MichaelCooke\Orthrus\Apis;

class Killmail extends Api
{
    public function __construct()
    {
        $this->base = 'killmails';
    }

    protected function get(int $killmailId, string $hash)
    {
        $this->endpoint = $killmailId . '/' . $hash;
    }
}
