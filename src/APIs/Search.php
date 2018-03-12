<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Search extends Api
{

    public function __construct(Orthrus $orthrus, array $categories, String $searchTerm, Bool $strict = false)
    {
        $this->base = 'search';
        $this->orthrus = $orthrus;
        $this->verb = 'get';
        $this->query = [
            'categories' => $categories,
            'search' => $searchTerm,
            'strict' => $strict
        ];
    }
}
