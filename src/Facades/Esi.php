<?php

namespace MichaelCooke\Orthrus\Facades;

use Illuminate\Support\Facades\Facade;

class Esi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'esi';
    }
}
