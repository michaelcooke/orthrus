<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasFittings
{
    protected function getFittings()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/fittings";
    }

    protected function createFitting($fitting)
    {
        $this->verb = "push";
        $this->endpoint = $this->id . "/fittings";
        $this->body = $fitting;
    }

    protected function deleteFitting($fittingId)
    {
        $this->verb = "delete";
        $this->endpoint = $this->id . "/fittings/" . $fittingId;
    }
}