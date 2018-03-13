<?php

namespace MichaelCooke\Orthrus\Apis;

class Market extends Api
{
    public function __construct()
    {
        $this->base = 'markets';
    }

    protected function history(int $regionId, int $typeId): void
    {
        $this->query = ['type_id' => $typeId];
        $this->endpoint = $regionId . '/history';
    }

    protected function itemGroups()
    {
        $this->endpoint = 'groups';
    }

    protected function itemGroup(int $groupId): void
    {
        $this->endpoint = 'groups/' . $groupId;
    }

    protected function itemTypes(int $regionId): void
    {
        $this->endpoint = $regionId . '/types';
    }

    protected function orders(int $regionId): void
    {
        $this->endpoint = $regionId . '/orders';
    }

    protected function prices(): void
    {
        $this->endpoint = 'prices';
    }

    protected function structureOrders(int $structureId): void
    {
        $this->endpoint = 'structures/' . $structureId;
    }
}
