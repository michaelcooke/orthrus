<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasStandings
{
    protected function standings(int $page = null): void
    {
        $this->query = ['page' => $page];
        $this->endpoint = $this->id . '/standings';

        if ($page == null) {
            $this->getAllPages = true;
        }
    }
}
