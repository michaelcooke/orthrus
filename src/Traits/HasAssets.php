<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasAssets
{
    protected function assets(int $page = null): void
    {
        $this->query = ['page' => $page];
        $this->endpoint = $this->id . '/assets';
        
        if ($page == null) {
            $this->getAllPages = true;
        }
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
