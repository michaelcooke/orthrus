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
use MichaelCooke\Orthrus\Traits\HasIndustry;
use MichaelCooke\Orthrus\Traits\HasBookmarks;
use MichaelCooke\Orthrus\Traits\HasContracts;
use MichaelCooke\Orthrus\Traits\HasKillmails;
use MichaelCooke\Orthrus\Traits\HasStandings;
use MichaelCooke\Orthrus\Traits\HasBlueprints;
use MichaelCooke\Orthrus\Traits\HasMarketOrders;
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
        HasIndustry,
        HasBookmarks,
        HasContracts,
        HasKillmails,
        HasStandings,
        HasBlueprints,
        HasMarketOrders,
        HasFactionWarfareStats;

    public function __construct(String $id = null)
    {
        $this->base = 'corporations';
        $this->id = $id;
    }

    protected function allianceHistory()
    {
        $this->endpoint = $this->id . '/alliancehistory';
    }

    protected function containerLogs()
    {
        $this->endpoint = $this->id . '/containers/logs';
    }

    protected function divisions()
    {
        $this->endpoint = $this->id . '/divisions';
    }

    protected function facilities()
    {
        $this->endpoint = $this->id . '/facilities';
    }

    protected function issuedMedals()
    {
        $this->endpoint = $this->id . '/medals/issued';
    }

    protected function members()
    {
        $this->endpoint = $this->id . '/members';
    }

    protected function memberLimit()
    {
        $this->endpoint = $this->id . '/members/limit';
    }

    protected function memberTitles()
    {
        $this->endpoint = $this->id . '/members/titles';
    }

    protected function memberTracking()
    {
        $this->endpoint = $this->id . '/membertracking';
    }

    protected function outposts()
    {
        $this->endpoint = $this->id . '/outposts';
    }

    protected function outpost($outpostId)
    {
        $this->endpoint = $this->id . '/outposts/' . $outpostId;
    }

    protected function roleHistory()
    {
        $this->endpoint = $this->id . '/roles/history';
    }

    protected function shareholders()
    {
        $this->endpoint = $this->id . '/shareholders';
    }

    protected function starbases()
    {
        $this->endpoint = $this->id . '/starbases';
    }

    protected function starbase($starbaseId, $systemId)
    {
        $this->query = ['system_id' => $systemId];
        $this->endpoint = $this->id . '/starbases/' . $starbaseId;
    }

    protected function structures()
    {
        $this->endpoint = $this->id . '/structures';
    }

    protected function structureVulnerability($structureId, $newSchedule)
    {
        $this->verb = 'put';
        $this->body = $newSchedule;
        $this->endpoint = $this->id . '/structures/' . $structureId;
    }

    protected function names($corporationIds)
    {
        $this->query = ['corporation_ids' => $corporationIds];
        $this->endpoint = 'names';
    }

    protected function npcCorporations()
    {
        $this->endpoint = 'npccorps';
    }

    protected function customsOffices()
    {
        $this->endpoint = $this->id . '/customs_offices';
    }

    protected function wallets()
    {
        $this->endpoint = $this->id . '/wallets';
    }

    protected function walletJournal(Int $walletId)
    {
        $this->endpoint = $this->id . '/wallets/' . $walletId . '/journal';
    }

    protected function walletTransactions(Int $walletId)
    {
        $this->endpoint = $this->id . '/wallets/' . $walletId . '/transactions';
    }

    protected function miningObservers()
    {
        $this->endpoint = $this->id . 'mining/observers';
    }

    protected function miningObserver(Int $observerId)
    {
        $this->endpoint = $this->id . 'mining/observers/' . $observerId;
    }

    protected function extractions()
    {
        $this->endpoint = $this->id . 'mining/extractions';
    }
}
