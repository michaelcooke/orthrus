<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasAssets
{
    protected function assets()
    {
        $this->endpoint = $this->id . '/assets';
    }

    protected function assetLocations($assets)
    {
        $this->verb = 'post';
        $this->body = $assets;
        $this->endpoint = $this->id . '/assets/locations';
    }

    protected function assetNames($assets)
    {
        $this->verb = 'post';
        $this->body = $assets;
        $this->endpoint = $this->id . '/assets/names';
    }
}