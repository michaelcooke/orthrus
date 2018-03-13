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

    public function __construct(String $id = null)
    {
        $this->base = 'characters';
        $this->id = $id;
    }

    protected function agentsResearch()
    {
        $this->endpoint = $this->id . '/agents_research';
    }

    protected function researchAgents()
    {
        $this->agentsResearch();
    }

    protected function chatChannels()
    {
        $this->endpoint = $this->id . '/chat_channels';
    }

    protected function corporationHistory()
    {
        $this->endpoint = $this->id . '/corporationhistory';
    }

    protected function employmentHistory()
    {
        $this->getCorporationHistory();
    }

    protected function calculateCSPA($characters)
    {
        $this->verb = 'post';
        $this->body = $characters;
        $this->endpoint = $this->id . '/cspa';
    }

    protected function fatigue()
    {
        $this->endpoint = $this->id . '/fatigue';
    }

    protected function location()
    {
        $this->endpoint = $this->id . '/location';
    }

    protected function loyaltyPoints()
    {
        $this->endpoint = $this->id . '/loyalty/points';
    }

    protected function notifications()
    {
        $this->endpoint = $this->id . '/notifications';
    }

    protected function notificationsContacts()
    {
        $this->endpoint = $this->id . '/notifications/contacts';
    }

    protected function online()
    {
        $this->endpoint = $this->id . '/online';
    }

    protected function contactNotifications()
    {
        $this->notificationsContacts();
    }

    protected function portrait()
    {
        $this->endpoint = $this->id . '/portrait';
    }

    protected function stats()
    {
        $this->endpoint = $this->id . '/stats';
    }

    protected function affiliation($characters)
    {
        $this->verb = 'post';
        $this->body = $characters;
        $this->endpoint = 'affiliation';
    }

    protected function clones()
    {
        $this->endpoint = $this->id . '/clones';
    }

    protected function implants()
    {
        $this->endpoint = $this->id . '/implants';
    }

    protected function ship()
    {
        $this->endpoint = $this->id . '/ship';
    }

    protected function deleteContacts($contactIds)
    {
        $this->verb = 'delete';
        $this->query = ['contact_ids' => $contactIds];
        $this->endpoint = $this->id . '/contacts';
    }

    protected function addContacts($contactIds, $standing)
    {
        $this->verb = 'post';
        $this->body = $contactIds;
        $this->query = $standing;
        $this->endpoint = $this->id . '/contacts';
    }

    protected function editContacts($contactIds, $standing)
    {
        $this->verb = 'put';
        $this->body = $contactIds;
        $this->query = $standing;
        $this->endpoint = $this->id . '/contacts';
    }

    protected function contactLabels()
    {
        $this->endpoint = $this->id . '/contacts/labels';
    }

    protected function completedOpportunities()
    {
        $this->endpoint = $this->id . '/opportunities';
    }

    protected function planets()
    {
        $this->endpoint = $this->id . '/planets';
    }

    protected function planet(Int $planetId)
    {
        $this->endpoint = $this->id . '/planets/' . $planetId;
    }

    protected function wallet()
    {
        $this->endpoint = $this->id . '/wallet';
    }

    protected function walletJournal()
    {
        $this->endpoint = $this->id . '/wallet/journal';
    }

    protected function walletTransactions()
    {
        $this->endpoint = $this->id . '/wallet/transactions';
    }

    protected function miningLedger()
    {
        $this->endpoint = $this->id . 'mining';
    }
}
