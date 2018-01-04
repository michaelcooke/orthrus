<?php

namespace MichaelCooke\Orthrus;

use Eseye;
use MichaelCooke\Orthrus\Apis\Alliance;
use MichaelCooke\Orthrus\Apis\Character;
use MichaelCooke\Orthrus\Apis\Corporation;

class Orthrus
{
    public function invoke(String $verb, String $endpoint, array $uri_data = null, array $body = null, array $query = null)
    {
        if ($body != null && $query != null) {
            return Eseye::setBody($body)->setQueryString($query)->invoke($verb, $endpoint, $uri_data);
        } elseif ($body != null) {
            return Eseye::setBody($body)->invoke($verb, $endpoint, $uri_data);
        } elseif ($query != null) {
            return Eseye::setQueryString($query)->invoke($verb, $endpoint, $uri_data);
        } else {
            return Eseye::invoke($verb, $endpoint, $uri_data);
        }
    }

    public function __call($method, $arguments)
    {
        $class = "MichaelCooke\\Orthrus\\APIs\\" . ucfirst($method);
        return new $class($this, ...$arguments);
    }
}