<?php

namespace MichaelCooke\Orthrus\Apis;

class Ui extends Api
{
    public function __construct()
    {
        $this->base = 'ui';
        $this->verb = 'post';
    }

    protected function autopilot(Int $systemId, bool $addToBeginning = false, bool $clearWaypoints = false): void
    {
        $this->query = [
            'destination_id' => $systemId,
            'add_to_beginning' => $addToBeginning,
            'clear_other_waypoints' => $clearWaypoints,
        ];
        $this->endpoint = 'autopilot/waypoint';
    }

    protected function contract(Int $contractId): void
    {
        $this->query = ['contract_id' => $contractId];
        $this->endpoint = 'openwindow/marketdetails';
    }

    protected function information(Int $typeId): void
    {
        $this->query = ['target_id' => $typeId];
        $this->endpoint = 'openwindow/marketdetails';
    }

    protected function marketDetails(Int $typeId): void
    {
        $this->query = ['type_id' => $typeId];
        $this->endpoint = 'openwindow/marketdetails';
    }
}
