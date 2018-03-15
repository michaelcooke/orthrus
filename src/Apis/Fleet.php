<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Traits\HasEditableId;

class Fleet extends Api
{
    use HasEditableId;

    public function __construct(string $id)
    {
        $this->base = 'fleets';
        $this->id = $id;
    }

    protected function setFleetSettings(string $motd, bool $freeMove): void
    {
        $this->verb = 'put';
        $this->body = ['motd' => $motd, 'is_free_move' => $is_free_move];
        $this->endpoint = $this->id;
    }

    protected function members(): void
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
    protected function sendInvite(int $characterId, string $role, int $wing = null, int $squad = null): void
    {
        $this->verb = 'post';
        $this->endpoint = $this->id . '/members';
        $this->body = [
            'character_id' => $characterId,
            'role'         => $role,
        ];

        if ($wing != null) {
            $this->body['wing_id'] = $wing;
        }
        if ($squad != null) {
            $this->body['squad_id'] = $squad;
        }
    }

    /*
     * If a character is moved to the fleet_commander role, neither wing_id or squad_id
     * should be specified. If a character is moved to the wing_commander role, only
     * wing_id should be specified. If a character is moved to the squad_commander role,
     * both wing_id and squad_id should be specified. If a character is moved to the
     * squad_member role, both wing_id and squad_id should be specified.
     */
    protected function moveMember(int $characterId, string $role, int $wing = null, int $squad = null): void
    {
        $this->verb = 'put';
        $this->endpoint = $this->id . '/members/' . $characterId;
        $this->body = ['role' => $role];

        if ($wing != null) {
            $this->body['wing_id'] = $wing;
        }
        if ($squad != null) {
            $this->body['squad_id'] = $squad;
        }
    }

    protected function kickMember(int $characterId): void
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/members/' . $charId;
    }

    protected function createSquad(int $wingId): void
    {
        $this->verb = 'post';
        $this->endpoint = $this->id . '/wings/' . $wingId . '/squads';
    }

    protected function renameSquad(int $squadId, string $name): void
    {
        $this->verb = 'put';
        $this->body = ['name' => $name];
        $this->endpoint = $this->id . '/squads/' . $squadId;
    }

    protected function deleteSquad(int $squadId): void
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/squads/' . $squadId;
    }

    protected function wings(): void
    {
        $this->endpoint = $this->id . '/wings';
    }

    protected function createWing(): void
    {
        $this->verb = 'post';
        $this->endpoint = $this->id . '/wings';
    }

    protected function renameWing(int $wingId, string $name): void
    {
        $this->verb = 'put';
        $this->body = ['name' => $name];
        $this->endpoint = $this->id . '/wings/' . $wingId;
    }

    protected function deleteWing(int $wingId): void
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/wings/' . $wingId;
    }
}
