<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasContracts
{
    protected function contracts()
    {
        $this->endpoint = $this->id . '/contracts';
    }

    protected function cntractBids($contractId)
    {
        $this->endpoint = $this->id . '/contracts/' . $contractId . '/bids';
    }

    protected function contractItems($contractId)
    {
        $this->endpoint = $this->id . '/contracts/' . $contractId . '/items';
    }
}
