<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Alliance extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = "search";
        $this->orthrus = $orthrus;
    }

    protected function search(array $categories, String $search, $strict = false)
    {
    	$this->verb = "get";
    	$this->index = true;
    	$this->query = ['categories' => $categories, 'search' => $search, 'strict' => $strict];
    }
}
