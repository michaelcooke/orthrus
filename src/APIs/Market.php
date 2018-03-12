<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Market extends Api
{
    public function __construct(Orthrus $orthrus)
    {
        $this->base = 'markets';
        $this->orthrus = $orthrus;
    }

    protected function getPrices()
    {
        $this->verb = 'get';
        $this->endpoint = 'prices';
    }

    protected function getOrders(Int $regionId)
    {
        $this->verb = 'get';
        $this->endpoint = $regionId . '/orders';
    }

    protected function getHistory(Int $regionId, Int $typeId)
    {
        $this->verb = 'get';
        $this->query = ['type_id' => $typeId];
        $this->endpoint = $regionId . '/history';
    }

    protected function getStructureOrders(Int $structureId)
    {
        $this->verb = 'get';
        $this->endpoint = 'structures/' . $structureId;
    }

    protected function getItemGroups()
    {
        $this->verb = 'get';
        $this->endpoint = 'groups';
    }

    protected function getItemGroup(Int $groupId)
    {
        $this->verb = 'get';
        $this->endpoint = 'groups/' . $groupId;
    }

    protected function getItemTypes(Int $regionId)
    {
        $this->verb = 'get';
        $this->endpoint = $regionId . '/types';
    }
}
