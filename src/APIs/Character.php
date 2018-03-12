<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;
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

    public function __construct(Orthrus $orthrus, String $id = null)
    {
        $this->base = 'characters';
        $this->id = $id;
        $this->orthrus = $orthrus;
    }

    protected function getAgentsResearch()
    {
        $this->endpoint = $this->id . '/agents_research';
    }

    protected function getResearchAgents()
    {
        $this->getAgentsResearch();
    }

    protected function getChatChannels()
    {
        $this->endpoint = $this->id . '/chat_channels';
    }

    protected function getCorporationHistory()
    {
        $this->endpoint = $this->id . '/corporationhistory';
    }

    protected function getEmploymentHistory()
    {
        $this->getCorporationHistory();
    }

    protected function calculateCSPA($characters)
    {
        $this->verb = 'post';
        $this->body = $characters;
        $this->endpoint = $this->id . '/cspa';
    }

    protected function getFatigue()
    {
        $this->endpoint = $this->id . '/fatigue';
    }

    protected function getLocation()
    {
        $this->endpoint = $this->id . '/location';
    }

    protected function getLoyaltyPoints()
    {
        $this->endpoint = $this->id . '/loyalty/points';
    }

    protected function getNotifications()
    {
        $this->endpoint = $this->id . '/notifications';
    }

    protected function getNotificationsContacts()
    {
        $this->endpoint = $this->id . '/notifications/contacts';
    }

    protected function getOnline()
    {
        $this->endpoint = $this->id . '/online';
    }

    protected function getContactNotifications()
    {
        $this->getNotificationsContacts();
    }

    protected function getPortrait()
    {
        $this->endpoint = $this->id . '/portrait';
    }

    protected function getStats()
    {
        $this->endpoint = $this->id . '/stats';
    }

    protected function getAffiliation($characters)
    {
        $this->verb = 'post';
        $this->body = $characters;
        $this->endpoint = 'affiliation';
    }

    protected function getClones()
    {
        $this->endpoint = $this->id . '/clones';
    }

    protected function getImplants()
    {
        $this->endpoint = $this->id . '/implants';
    }

    protected function getShip()
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

    protected function getContactLabels()
    {
        $this->endpoint = $this->id . '/contacts/labels';
    }

    protected function getCompletedOpportunities()
    {
        $this->endpoint = $this->id . '/opportunities';
    }

    protected function getPlanets()
    {
        $this->endpoint = $this->id . '/planets';
    }

    protected function getPlanet(Int $planetId)
    {
        $this->endpoint = $this->id . '/planets/' . $planetId;
    }

    protected function getWallet()
    {
        $this->endpoint = $this->id . '/wallet';
    }

    protected function getWalletJournal()
    {
        $this->endpoint = $this->id . '/wallet/journal';
    }

    protected function getWalletTransactions()
    {
        $this->endpoint = $this->id . '/wallet/transactions';
    }

    protected function getMiningLedger()
    {
        $this->endpoint = $this->id . 'mining';
    }
}
