<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasContracts
{
    protected function contracts(): void
    {
        $this->endpoint = $this->id . '/contracts';
    }

    protected function contractBids(int $contractId): void
    {
        $this->endpoint = $this->id . '/contracts/' . $contractId . '/bids';
    }

    protected function contractItems(int $contractId): void
    {
        $this->endpoint = $this->id . '/contracts/' . $contractId . '/items';
    }
}
