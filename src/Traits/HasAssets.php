<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasAssets
{
    protected function getAssets()
    {
        $this->verb = 'get';
        $this->endpoint = $this->id . '/assets';
    }

    protected function getAssetLocations($assets)
    {
        $this->verb = 'post';
        $this->body = $assets;
        $this->endpoint = $this->id . '/assets/locations';
    }

    protected function getAssetNames($assets)
    {
        $this->verb = 'post';
        $this->body = $assets;
        $this->endpoint = $this->id . '/assets/names';
    }
}