<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Traits\HasIcons;
use MichaelCooke\Orthrus\Traits\HasContacts;
use MichaelCooke\Orthrus\Traits\HasIdAndIndex;
use MichaelCooke\Orthrus\Traits\HasCorporations;

class Alliance extends Api
{
    use HasIcons,
        HasContacts,
        HasIdAndIndex,
        HasCorporations;

    public function __construct(String $id = null)
    {
        $this->base = 'alliances';
        $this->id = $id;
    }

    protected function names($alliances): void
    {
        $this->query = ['alliance_ids' => $alliances];
        $this->endpoint = 'names';
    }
}
