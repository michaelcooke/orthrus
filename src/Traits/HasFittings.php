<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasFittings
{
    protected function fittings(): void
    {
        $this->endpoint = $this->id . '/fittings';
    }

    protected function createFitting(array $fitting): void
    {
        $this->verb = 'post';
        $this->body = $fitting;
        $this->endpoint = $this->id . '/fittings';
    }

    protected function deleteFitting(int $fittingId): void
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/fittings/' . $fittingId;
    }
}
