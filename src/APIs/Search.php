<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Search extends Api
{

    public function __construct(array $categories, String $searchTerm, Bool $strict = false)
    {
        $this->base = 'search';
        $this->query = [
            'categories' => $categories,
            'search' => $searchTerm,
            'strict' => $strict
        ];
    }
}
