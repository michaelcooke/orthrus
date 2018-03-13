<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Traits\HasEditableId;

class Fleet extends Api
{
    use HasEditableId;

    public function __construct(String $id)
    {
        $this->base = 'fleets';
        $this->id = $id;
    }

    protected function setFleetSettings($motd, $is_free_move)
    {
        $this->verb = 'put';
        $this->body = ['motd' => $motd, 'is_free_move' => $is_free_move];
        $this->endpoint = $this->id;
    }

    protected function members()
    {
        $this->endpoint = $this->id . '/members';
    }

    /*
     * If a character is invited with the fleet_commander role, neither wing_id or squad_id
     * should be specified. If a character is moved to the wing_commander role, only
     * wing_id should be specified. If a character is moved to the squad_commander role,
     * both wing_id and squad_id should be specified. If a character is moved to the
     * squad_member role, both wing_id and squad_id should be specified.
     */
    protected function sendInvite($charId, $role, $wing = null, $squad = null)
    {
        $this->verb = 'post';
        $this->endpoint = $this->id . '/members';
        $this->body = [
            'character_id' => $charId,
            'role'         => $role,
        ];

        if ($wing != null) {
            $this->body['wing_id'] = $wing;
        }
        if ($squad != null) {
            $this->body['squad_id'] = $squad;
        }
    }

    protected function kickMember($charId)
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/members/' . $charId;
    }

    /*
     * If a character is moved to the fleet_commander role, neither wing_id or squad_id
     * should be specified. If a character is moved to the wing_commander role, only
     * wing_id should be specified. If a character is moved to the squad_commander role,
     * both wing_id and squad_id should be specified. If a character is moved to the
     * squad_member role, both wing_id and squad_id should be specified.
     */
    protected function moveMember($charId, $role, $wing = null, $squad = null)
    {
        $this->verb = 'put';
        $this->endpoint = $this->id . '/members/' . $charId;
        $this->body = ['role' => $role];

        if ($wing != null) {
            $this->body['wing_id'] = $wing;
        }
        if ($squad != null) {
            $this->body['squad_id'] = $squad;
        }
    }

    protected function createSquad($wingId)
    {
        $this->verb = 'post';
        $this->endpoint = $this->id . '/wings/' . $wingId . '/squads';
    }

    protected function deleteSquad($squadId)
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/squads/' . $squadId;
    }

    protected function renameSquad($squadId, $name)
    {
        $this->verb = 'put';
        $this->body = ['name' => $name];
        $this->endpoint = $this->id . '/squads/' . $squadId;
    }

    protected function wings()
    {
        $this->endpoint = $this->id . '/wings';
    }

    protected function createWing()
    {
        $this->verb = 'post';
        $this->endpoint = $this->id . '/wings';
    }

    protected function deleteWing($wingId)
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/wings/' . $wingId;
    }

    protected function renameWing($wingId, $name)
    {
        $this->verb = 'put';
        $this->body = ['name' => $name];
        $this->endpoint = $this->id . '/wings/' . $wingId;
    }
}
