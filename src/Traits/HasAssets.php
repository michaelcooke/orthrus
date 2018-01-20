<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasAssets
{
    protected function getAssets()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/assets";
    }

    protected function getAssetLocations()
    {
        $this->verb = "post";
        $this->endpoint = $this->id . "/assets/locations";
    }

    protected function getAssetNames()
    {
        $this->verb = "post";
        $this->endpoint = $this->id . "/assets/names";
    }
}
