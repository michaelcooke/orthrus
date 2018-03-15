<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Traits\HasId;
use MichaelCooke\Orthrus\Traits\HasMail;
use MichaelCooke\Orthrus\Traits\HasFleet;
use MichaelCooke\Orthrus\Traits\HasRoles;
use MichaelCooke\Orthrus\Traits\HasAssets;
use MichaelCooke\Orthrus\Traits\HasMedals;
use MichaelCooke\Orthrus\Traits\HasSearch;
use MichaelCooke\Orthrus\Traits\HasSkills;
use MichaelCooke\Orthrus\Traits\HasTitles;
use MichaelCooke\Orthrus\Traits\HasCalendar;
use MichaelCooke\Orthrus\Traits\HasContacts;
use MichaelCooke\Orthrus\Traits\HasFittings;
use MichaelCooke\Orthrus\Traits\HasIndustry;
use MichaelCooke\Orthrus\Traits\HasBookmarks;
use MichaelCooke\Orthrus\Traits\HasContracts;
use MichaelCooke\Orthrus\Traits\HasKillmails;
use MichaelCooke\Orthrus\Traits\HasStandings;
use MichaelCooke\Orthrus\Traits\HasBlueprints;
use MichaelCooke\Orthrus\Traits\HasMarketOrders;
use MichaelCooke\Orthrus\Traits\HasFactionWarfareStats;

class Character extends Api
{
    use HasId,
        HasMail,
        HasFleet,
        HasRoles,
        HasAssets,
        HasMedals,
        HasSearch,
        HasSkills,
        HasTitles,
        HasCalendar,
        HasContacts,
        HasFittings,
        HasIndustry,
        HasBookmarks,
        HasContracts,
        HasKillmails,
        HasStandings,
        HasBlueprints,
        HasMarketOrders,
        HasFactionWarfareStats;

    public function __construct(string $id = null)
    {
        $this->base = 'characters';
        $this->id = $id;
    }

    protected function affiliation(array $characterIds): void
    {
        $this->verb = 'post';
        $this->body = $characterIds;
        $this->endpoint = 'affiliation';
    }

    protected function agentsResearch(): void
    {
        $this->endpoint = $this->id . '/agents_research';
    }

    protected function researchAgents(): void
    {
        $this->agentsResearch();
    }

    protected function chatChannels(): void
    {
        $this->endpoint = $this->id . '/chat_channels';
    }

    protected function clones(): void
    {
        $this->endpoint = $this->id . '/clones';
    }

    protected function addContacts(array $contactIds, float $standing): void
    {
        $this->verb = 'post';
        $this->body = $contactIds;
        $this->query = $standing;
        $this->endpoint = $this->id . '/contacts';
    }

    protected function editContacts(array $contactIds, float $standing): void
    {
        $this->verb = 'put';
        $this->body = $contactIds;
        $this->query = $standing;
        $this->endpoint = $this->id . '/contacts';
    }

    protected function deleteContacts(array $contactIds): void
    {
        $this->verb = 'delete';
        $this->query = ['contact_ids' => $contactIds];
        $this->endpoint = $this->id . '/contacts';
    }

    protected function contactLabels(): void
    {
        $this->endpoint = $this->id . '/contacts/labels';
    }

    protected function corporationHistory(): void
    {
        $this->endpoint = $this->id . '/corporationhistory';
    }

    protected function employmentHistory(): void
    {
        $this->getCorporationHistory();
    }

    protected function calculateCSPA(array $characterIds): void
    {
        $this->verb = 'post';
        $this->body = $characterIds;
        $this->endpoint = $this->id . '/cspa';
    }

    protected function completedOpportunities(): void
    {
        $this->endpoint = $this->id . '/opportunities';
    }

    protected function fatigue(): void
    {
        $this->endpoint = $this->id . '/fatigue';
    }

    protected function implants(): void
    {
        $this->endpoint = $this->id . '/implants';
    }

    protected function location(): void
    {
        $this->endpoint = $this->id . '/location';
    }

    protected function loyaltyPoints(): void
    {
        $this->endpoint = $this->id . '/loyalty/points';
    }

    protected function miningLedger(): void
    {
        $this->endpoint = $this->id . 'mining';
    }

    protected function notifications(): void
    {
        $this->endpoint = $this->id . '/notifications';
    }

    protected function notificationsContacts(): void
    {
        $this->endpoint = $this->id . '/notifications/contacts';
    }

    protected function contactNotifications(): void
    {
        $this->notificationsContacts();
    }

    protected function online(): void
    {
        $this->endpoint = $this->id . '/online';
    }

    protected function planets(): void
    {
        $this->endpoint = $this->id . '/planets';
    }

    protected function planet(int $planetId): void
    {
        $this->endpoint = $this->id . '/planets/' . $planetId;
    }

    protected function portrait(): void
    {
        $this->endpoint = $this->id . '/portrait';
    }

    protected function stats(): void
    {
        $this->endpoint = $this->id . '/stats';
    }

    protected function ship(): void
    {
        $this->endpoint = $this->id . '/ship';
    }

    protected function wallet(): void
    {
        $this->endpoint = $this->id . '/wallet';
    }

    protected function walletJournal(): void
    {
        $this->endpoint = $this->id . '/wallet/journal';
    }

    protected function walletTransactions(): void
    {
        $this->endpoint = $this->id . '/wallet/transactions';
    }
}
