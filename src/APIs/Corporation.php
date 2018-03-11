<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;
use MichaelCooke\Orthrus\Traits\HasId;
use MichaelCooke\Orthrus\Traits\HasIcons;
use MichaelCooke\Orthrus\Traits\HasRoles;
use MichaelCooke\Orthrus\Traits\HasAssets;
use MichaelCooke\Orthrus\Traits\HasMedals;
use MichaelCooke\Orthrus\Traits\HasTitles;
use MichaelCooke\Orthrus\Traits\HasContacts;
use MichaelCooke\Orthrus\Traits\HasBookmarks;
use MichaelCooke\Orthrus\Traits\HasContracts;
use MichaelCooke\Orthrus\Traits\HasKillmails;
use MichaelCooke\Orthrus\Traits\HasStandings;
use MichaelCooke\Orthrus\Traits\HasBlueprints;
use MichaelCooke\Orthrus\Traits\HasFactionWarfareStats;

class Corporation extends Api
{
    use HasId,
        HasIcons,
        HasRoles,
        HasAssets,
        HasMedals,
        HasTitles,
        HasContacts,
        HasBookmarks,
        HasContracts,
        HasKillmails,
        HasStandings,
        HasBlueprints,
        HasFactionWarfareStats;

    public function __construct(Orthrus $orthrus, String $id = null)
    {
        $this->base = "corporations";
        $this->id = $id;
        $this->orthrus = $orthrus;
    }

    protected function getAllianceHistory()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/alliancehistory";
    }

    protected function getContainerLogs()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/containers/logs";
    }

    protected function getDivisions()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/divisions";
    }

    protected function getFacilities()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/facilities";
    }

    protected function getIssuedMedals()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/medals/issued";
    }

    protected function getMembers()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/members";
    }

    protected function getMemberLimit()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/members/limit";
    }

    protected function getMemberTitles()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/members/titles";
    }

    protected function getMemberTracking()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/membertracking";
    }

    protected function getOutposts()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/outposts";
    }

    protected function getOutpost($outpostId)
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/outposts/" . $outpostId;
    }

    protected function getRoleHistory()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/roles/history";
    }

    protected function getShareholders()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/shareholders";
    }

    protected function getStarbases()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/starbases";
    }

    protected function getStarbase($starbaseId, $systemId)
    {
        $this->verb = "get";
        $this->query = ['system_id' => $systemId];
        $this->endpoint = $this->id . "/starbases/" . $starbaseId;
    }

    protected function getStructures()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/structures";
    }

    protected function updateStructureVulnerability($structureId, $newSchedule)
    {
        $this->verb = "put";
        $this->body = $newSchedule;
        $this->endpoint = $this->id . "/structures/" . $structureId;
    }

    protected function getNames($corporationIds)
    {
        $this->verb = "get";
        $this->query = ['corporation_ids' => $corporationIds];
        $this->endpoint = "names";
    }

    protected function getNpcCorporations()
    {
        $this->verb = "get";
        $this->endpoint = "npccorps";
    }
}
