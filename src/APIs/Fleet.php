<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;
use MichaelCooke\Orthrus\Traits\HasId;

class Fleet extends Api
{
    use HasEditableId;

    public function __construct(Orthrus $orthrus, String $id)
    {
        $this->base = "/" . "fleets" . "/";
        $this->id = $id;
        $this->orthrus = $orthrus;
    }

    public function setFleetSettings($motd, $is_free_move)
    {
    	return $this->put(["motd" => $motd, "is_free_move" => $is_free_move]);
    }

    public function getMembers()
    {
    	return $this->orthrus->invoke('get', $this->base . '{fleet_id}/members/', ['fleet_id' => $this->id]);
    }

    public function sendInvite()
    {
    	//
    }

    public function kickMember($charId)
    {
    	return $this->orthrus->invoke('delete', $this->base . '{fleet_id}/members/{member_id}/', ['fleet_id' => $this->id, 'member_id' => $charId]);
    }

    public function moveMember($charId)
    {
    	// put - needs body
    }

    public function createSquad($wingId)
    {
    	//
    }

    public function deleteSquad($squadId)
    {
    	//
    }

    public function renameSquad($squadId)
    {
    	//
    }

    public function getWings()
    {
    	//
    }

    public function createWing()
    {
    	//
    }

    public function deleteWing($wingId)
    {
    	//
    }

    public function renameWing($wingId)
    {
    	//
    }
}
