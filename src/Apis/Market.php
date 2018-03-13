<?php

namespace MichaelCooke\Orthrus\Apis;

class Market extends Api
{
    public function __construct()
    {
        $this->base = 'markets';
    }

    protected function prices(): void
    {
        $this->endpoint = 'prices';
    }

    protected function orders(Int $regionId): void
    {
        $this->endpoint = $regionId . '/orders';
    }

    protected function history(Int $regionId, int $typeId): void
    {
        $this->query = ['type_id' => $typeId];
        $this->endpoint = $regionId . '/history';
    }

    protected function structureOrders(Int $structureId): void
    {
        $this->endpoint = 'structures/' . $structureId;
    }

    protected function itemGroups()
    {
        $this->endpoint = 'groups';
    }

    protected function itemGroup(Int $groupId): void
    {
        $this->endpoint = 'groups/' . $groupId;
    }

    protected function itemTypes(Int $regionId): void
    {
        $this->endpoint = $regionId . '/types';
    }
}
