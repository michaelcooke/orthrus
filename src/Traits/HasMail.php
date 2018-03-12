<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasMail
{
    protected function getMailHeaders()
    {
        $this->verb = 'get';
        $this->endpoint = $this->id . '/mail';
    }

    protected function getMailLabels()
    {
        $this->verb = 'get';
        $this->endpoint = $this->id . '/mail/labels';
    }

    protected function createMailLabel(String $name)
    {
        $this->verb = 'post';
        $this->body = [
            'name' => $name,
            'color' => '#ffffff',
        ];
        $this->endpoint = $this->id . '/mail/labels';
    }

    protected function getMailingLists()
    {
        $this->verb = 'get';
        $this->endpoint = $this->id . '/mail/lists';
    }

    protected function deleteMailLabel(Int $id)
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/mail/labels/' . $id;
    }

    protected function getMail(Int $id)
    {
        $this->verb = 'get';
        $this->endpoint = $this->id . '/mail/' . $id;
    }

    protected function updateMail(Int $id, Bool $read, Array $labels)
    {
        $this->verb = 'put';
        $this->body = [
            'read' => $read,
            'labels' => $labels
        ];
        $this->endpoint = $this->id . '/mail/' . $id;
    }

    protected function deleteMail(Int $id)
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/mail/' . $id;
    }

    protected function sendMail(Array $recipients, String $subject, String $body, Int $approved_cost)
    {
        $this->verb = 'post';
        $this->body = [
            'recipients' => $recipients,
            'subject' => $subject,
            'body' => $body,
            'approved_cost' => $approved_cost,
        ];
        $this->endpoint = $this->id . '/mail';
    }
}
