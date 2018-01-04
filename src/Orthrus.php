<?php

namespace MichaelCooke\Orthrus;

use Eseye;
use MichaelCooke\Orthrus\Apis\Alliance;
use MichaelCooke\Orthrus\Apis\Character;
use MichaelCooke\Orthrus\Apis\Corporation;

class Orthrus
{
    public function invoke(String $queryType, String $endPoint)
    {
        return Eseye::invoke($queryType, $endPoint);
    }

    public function __call($method, $arguments)
    {
        $class = "MichaelCooke\\Orthrus\\APIs\\" . ucfirst($method);
        return new $class($this, ...$arguments);
    }

    public function fleet($id)
    {
        return new Fleet($this, $id);
    }
}
