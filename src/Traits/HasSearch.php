<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasSearch
{
    protected function search(array $categories, string $searchTerm, bool $strict = false): void
    {
        $this->query = [
            'categories' => $categories,
            'search' => $searchTerm,
            'strict' => $strict,
        ];
        $this->endpoint = $this->id . '/search';
    }
}
