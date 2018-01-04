<?php

namespace MichaelCooke\Orthrus;

use Eseye;
use MichaelCooke\Orthrus\Apis\Alliance;
use MichaelCooke\Orthrus\Apis\Character;
use MichaelCooke\Orthrus\Apis\Corporation;

class Orthrus
{
    public function invoke(String $verb, String $endpoint, array $body = null)
    {
        if ($body != null) {
            return Eseye::setBody($body)->invoke($verb, $endpoint);
        } else {
            return Eseye::invoke($verb, $endpoint);
        }
    }

    public function __call($method, $arguments)
    {
        $class = "MichaelCooke\\Orthrus\\APIs\\" . ucfirst($method);
        return new $class($this, ...$arguments);
    }
}