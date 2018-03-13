<?php

namespace MichaelCooke\Orthrus\Apis;

class Search extends Api
{
    public function __construct(array $categories, string $searchTerm, bool $strict = false)
    {
        $this->base = 'search';
        $this->query = [
            'categories' => $categories,
            'search' => $searchTerm,
            'strict' => $strict,
        ];
    }
}
