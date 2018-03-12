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
        $this->endpoint = 'prices';
    }

    protected function getOrders(Int $regionId)
    {
        $this->endpoint = $regionId . '/orders';
    }

    protected function getHistory(Int $regionId, Int $typeId)
    {
        $this->query = ['type_id' => $typeId];
        $this->endpoint = $regionId . '/history';
    }

    protected function getStructureOrders(Int $structureId)
    {
        $this->endpoint = 'structures/' . $structureId;
    }

    protected function getItemGroups()
    {
        $this->endpoint = 'groups';
    }

    protected function getItemGroup(Int $groupId)
    {
        $this->endpoint = 'groups/' . $groupId;
    }

    protected function getItemTypes(Int $regionId)
    {
        $this->endpoint = $regionId . '/types';
    }
}
