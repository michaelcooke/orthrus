<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasMail
{
    protected function mailHeaders(): void
    {
        $this->endpoint = $this->id . '/mail';
    }

    protected function mailLabels(): void
    {
        $this->endpoint = $this->id . '/mail/labels';
    }

    protected function createMailLabel(String $name): void
    {
        $this->verb = 'post';
        $this->body = [
            'name' => $name,
            'color' => '#ffffff',
        ];
        $this->endpoint = $this->id . '/mail/labels';
    }

    protected function mailingLists(): void
    {
        $this->endpoint = $this->id . '/mail/lists';
    }

    protected function deleteMailLabel(Int $mailId): void
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/mail/labels/' . $mailId;
    }

    protected function mail(Int $mailId): void
    {
        $this->endpoint = $this->id . '/mail/' . $mailId;
    }

    protected function updateMail(Int $mailId, Bool $read, array $labels): void
    {
        $this->verb = 'put';
        $this->body = [
            'read' => $read,
            'labels' => $labels,
        ];
        $this->endpoint = $this->id . '/mail/' . $mailId;
    }

    protected function deleteMail(Int $mailId): void
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/mail/' . $mailId;
    }

    protected function sendMail(array $recipients, String $subject, String $body, Int $approvedCost): void
    {
        $this->verb = 'post';
        $this->body = [
            'recipients' => $recipients,
            'subject' => $subject,
            'body' => $body,
            'approved_cost' => $approvedCost,
        ];
        $this->endpoint = $this->id . '/mail';
    }
}
