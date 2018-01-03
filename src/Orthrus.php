<?php

namespace MichaelCooke\Orthrus;

use MichaelCooke\Orthrus\Apis\Alliance;
use MichaelCooke\Orthrus\Apis\Character;
use MichaelCooke\Orthrus\Apis\Corporation;
use MichaelCooke\LaravelEseye\Facades\Eseye;

class Orthrus
{
    public function invoke(String $queryType, String $endPoint)
    {
        return Eseye::invoke($queryType, $endPoint);
    }

    public function alliance($id = null)
    {
        return new Alliance($this, $id);
    }

    public function character($id)
    {
        return new Character($this, $id);
    }

    public function corporation($id)
    {
        return new Corporation($this, $id);
    }

    public function fleet($id)
    {
        return new Fleet($this, $id);
    }
}
