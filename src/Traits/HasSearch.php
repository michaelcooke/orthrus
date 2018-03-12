<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasSearch
{
    protected function search(array $categories, String $searchTerm, Bool $strict = false)
    {
        $this->verb = 'get';
        $this->query = [
            'categories' => $categories,
            'search' => $searchTerm,
            'strict' => $strict
        ];
        $this->endpoint = $this->id . '/search';
    }
}
