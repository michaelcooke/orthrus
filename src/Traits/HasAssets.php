<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasAssets
{
    protected function assets(): void
    {
        $this->endpoint = $this->id . '/assets';
    }

    protected function assetLocations(array $itemIds): void
    {
        $this->verb = 'post';
        $this->body = $itemIds;
        $this->endpoint = $this->id . '/assets/locations';
    }

    protected function assetNames(array $itemIds): void
    {
        $this->verb = 'post';
        $this->body = $itemIds;
        $this->endpoint = $this->id . '/assets/names';
    }
}
