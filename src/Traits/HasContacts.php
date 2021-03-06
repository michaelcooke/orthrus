<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasContacts
{
    protected function contacts(int $page = null): void
    {
        $this->query = ['page' => $page];
        $this->endpoint = $this->id . '/contacts';

        if ($page == null) {
            $this->getAllPages = true;
        }
    }
}
