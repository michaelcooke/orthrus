<?php

namespace MichaelCooke\Orthrus\Apis;

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

    public function __construct(Int $id = null)
    {
        $this->base = 'corporations';
        $this->id = $id;
    }

    protected function allianceHistory(): void
    {
        $this->endpoint = $this->id . '/alliancehistory';
    }

    protected function containerLogs(): void
    {
        $this->endpoint = $this->id . '/containers/logs';
    }

    protected function divisions(): void
    {
        $this->endpoint = $this->id . '/divisions';
    }

    protected function facilities(): void
    {
        $this->endpoint = $this->id . '/facilities';
    }

    protected function issuedMedals(): void
    {
        $this->endpoint = $this->id . '/medals/issued';
    }

    protected function members(): void
    {
        $this->endpoint = $this->id . '/members';
    }

    protected function memberLimit(): void
    {
        $this->endpoint = $this->id . '/members/limit';
    }

    protected function memberTitles(): void
    {
        $this->endpoint = $this->id . '/members/titles';
    }

    protected function memberTracking(): void
    {
        $this->endpoint = $this->id . '/membertracking';
    }

    protected function outposts(): void
    {
        $this->endpoint = $this->id . '/outposts';
    }

    protected function outpost(Int $outpostId): void
    {
        $this->endpoint = $this->id . '/outposts/' . $outpostId;
    }

    protected function roleHistory(): void
    {
        $this->endpoint = $this->id . '/roles/history';
    }

    protected function shareholders(): void
    {
        $this->endpoint = $this->id . '/shareholders';
    }

    protected function starbases(): void
    {
        $this->endpoint = $this->id . '/starbases';
    }

    protected function starbase(Int $starbaseId, int $systemId): void
    {
        $this->query = ['system_id' => $systemId];
        $this->endpoint = $this->id . '/starbases/' . $starbaseId;
    }

    protected function structures(): void
    {
        $this->endpoint = $this->id . '/structures';
    }

    protected function structureVulnerability(Int $structureId, int $newSchedule): void
    {
        $this->verb = 'put';
        $this->body = $newSchedule;
        $this->endpoint = $this->id . '/structures/' . $structureId;
    }

    protected function names(array $corporationIds): void
    {
        $this->query = ['corporation_ids' => $corporationIds];
        $this->endpoint = 'names';
    }

    protected function npcCorporations(): void
    {
        $this->endpoint = 'npccorps';
    }

    protected function customsOffices(): void
    {
        $this->endpoint = $this->id . '/customs_offices';
    }

    protected function wallets(): void
    {
        $this->endpoint = $this->id . '/wallets';
    }

    protected function walletJournal(Int $walletId): void
    {
        $this->endpoint = $this->id . '/wallets/' . $walletId . '/journal';
    }

    protected function walletTransactions(Int $walletId): void
    {
        $this->endpoint = $this->id . '/wallets/' . $walletId . '/transactions';
    }

    protected function miningObservers(): void
    {
        $this->endpoint = $this->id . 'mining/observers';
    }

    protected function miningObserver(Int $observerId): void
    {
        $this->endpoint = $this->id . 'mining/observers/' . $observerId;
    }

    protected function extractions(): void
    {
        $this->endpoint = $this->id . 'mining/extractions';
    }
}
