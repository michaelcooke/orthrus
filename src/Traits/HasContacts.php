<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasContacts
{
    protected function getContacts($page = null)
    {
        $this->query = ['page' => $page];
        $this->endpoint = $this->id . '/contacts';

        if ($page == null) {
            $this->getAllPages = true;
        }
    }
}
