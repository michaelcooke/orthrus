<?php

namespace MichaelCooke\Orthrus;

use Eseye;
use MichaelCooke\Orthrus\Apis\Alliance;
use MichaelCooke\Orthrus\Apis\Character;
use MichaelCooke\Orthrus\Apis\Corporation;

class Orthrus
{
    protected $eseye;

    public function __construct()
    {
        $this->eseye = new Eseye;
    }

    public function invoke(String $verb, String $endpoint, array $uri_data = null, array $body = null, array $query = null)
    {
        if ($body != null) {
            $this->eseye::setBody($body);
        }

        if ($query != null) {
            $this->eseye::setQueryString($query);
        }

        if ($uri_data != null) {
            return $this->eseye::invoke($verb, $endpoint, $uri_data);
        }

        return $this->eseye::invoke($verb, $endpoint);
    }

    public function __call($method, $arguments)
    {
        $class = "MichaelCooke\\Orthrus\\APIs\\" . ucfirst($method);
        return new $class($this, ...$arguments);
    }
}
