<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasContracts
{
    protected function getContracts()
    {
        $this->endpoint = $this->id . '/contracts';
    }

    protected function getContractBids($contractId)
    {
        $this->endpoint = $this->id . '/contracts/' . $contractId . '/bids';
    }

    protected function getContractItems($contractId)
    {
        $this->endpoint = $this->id . '/contracts/' . $contractId . '/items';
    }
}
