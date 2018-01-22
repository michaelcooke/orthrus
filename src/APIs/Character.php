<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;
use MichaelCooke\Orthrus\Traits\HasId;
use MichaelCooke\Orthrus\Traits\HasRoles;
use MichaelCooke\Orthrus\Traits\HasAssets;
use MichaelCooke\Orthrus\Traits\HasMedals;
use MichaelCooke\Orthrus\Traits\HasTitles;
use MichaelCooke\Orthrus\Traits\HasCalendar;
use MichaelCooke\Orthrus\Traits\HasContacts;
use MichaelCooke\Orthrus\Traits\HasBookmarks;
use MichaelCooke\Orthrus\Traits\HasContracts;
use MichaelCooke\Orthrus\Traits\HasStandings;
use MichaelCooke\Orthrus\Traits\HasBlueprints;

class Character extends Api
{
    use HasId,
        HasRoles,
        HasAssets,
        HasMedals,
        HasTitles,
        HasCalendar,
        HasContacts,
        HasBookmarks,
        HasContracts,
        HasStandings,
        HasBlueprints;

    public function __construct(Orthrus $orthrus, String $id = null)
    {
        $this->base = "characters";
        $this->id = $id;
        $this->orthrus = $orthrus;
    }

    protected function getAgentsResearch()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/agents_research";
    }

    protected function getResearchAgents()
    {
        $this->getAgentsResearch();
    }

    protected function getChatChannels()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/chat_channels";
    }

    protected function getCorporationHistory()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/corporationhistory";
    }

    protected function getEmploymentHistory()
    {
        $this->getCorporationHistory();
    }

    protected function calculateCSPA($characters)
    {
        $this->verb = "post";
        $this->body = $characters;
        $this->endpoint = $this->id . "/cspa";
    }

    protected function getFatigue()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/fatigue";
    }

    protected function getNotifications()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/notifications";
    }

    protected function getNotificationsContacts()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/notifications/contacts";
    }

    protected function getContactNotifications()
    {
        $this->getNotificationsContacts();
    }

    protected function getPortrait()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/portrait";
    }

    protected function getStats()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/stats";
    }

    protected function getAffiliation($characters)
    {
        $this->verb = "post";
        $this->body = $characters;
        $this->endpoint = "affiliation";
    }

    protected function getClones()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/clones";
    }

    protected function getImplants()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/implants";
    }

    protected function deleteContacts($contactIds)
    {
        $this->verb = "delete";
        $this->query = ['contact_ids' => $contactIds];
        $this->endpoint = $this->id . "/contacts";
    }

    protected function addContacts($contactIds, $standing)
    {
        $this->verb = "post";
        $this->body = $contactIds;
        $this->query = $standing;
        $this->endpoint = $this->id . "/contacts";
    }

    protected function editContacts($contactIds, $standing)
    {
        $this->verb = "put";
        $this->body = $contactIds;
        $this->query = $standing;
        $this->endpoint = $this->id . "/contacts";
    }

    protected function getContactLabels()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/contacts/labels";
    }
}
