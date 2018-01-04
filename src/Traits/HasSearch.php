<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasSearch
{
    protected function search(array $categories, String $search, $strict = false)
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/search";
        $this->query = ['categories' => $categories, 'search' => $search, 'strict' => $strict];
    }
}
