<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasContracts
{
    protected function contracts(): void
    {
        $this->endpoint = $this->id . '/contracts';
    }

    protected function cntractBids(Int $contractId): void
    {
        $this->endpoint = $this->id . '/contracts/' . $contractId . '/bids';
    }

    protected function contractItems(Int $contractId): void
    {
        $this->endpoint = $this->id . '/contracts/' . $contractId . '/items';
    }
}
