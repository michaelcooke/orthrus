<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasMail
{
    protected function mailHeaders()
    {
        $this->endpoint = $this->id . '/mail';
    }

    protected function mailLabels()
    {
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

    protected function mailingLists()
    {
        $this->endpoint = $this->id . '/mail/lists';
    }

    protected function deleteMailLabel(Int $id)
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/mail/labels/' . $id;
    }

    protected function mail(Int $id)
    {
        $this->endpoint = $this->id . '/mail/' . $id;
    }

    protected function updateMail(Int $id, Bool $read, array $labels)
    {
        $this->verb = 'put';
        $this->body = [
            'read' => $read,
            'labels' => $labels,
        ];
        $this->endpoint = $this->id . '/mail/' . $id;
    }

    protected function deleteMail(Int $id)
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/mail/' . $id;
    }

    protected function sendMail(array $recipients, String $subject, String $body, Int $approved_cost)
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
