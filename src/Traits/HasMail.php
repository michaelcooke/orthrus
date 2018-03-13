<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasMail
{
    protected function mailHeaders(): void
    {
        $this->endpoint = $this->id . '/mail';
    }

    protected function mail(int $mailId): void
    {
        $this->endpoint = $this->id . '/mail/' . $mailId;
    }

    protected function sendMail(array $recipients, string $subject, string $body, int $approvedCost): void
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

    protected function updateMail(int $mailId, bool $read, array $labels): void
    {
        $this->verb = 'put';
        $this->body = [
            'read' => $read,
            'labels' => $labels,
        ];
        $this->endpoint = $this->id . '/mail/' . $mailId;
    }

    protected function deleteMail(int $mailId): void
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/mail/' . $mailId;
    }

    protected function mailingLists(): void
    {
        $this->endpoint = $this->id . '/mail/lists';
    }

    protected function mailLabels(): void
    {
        $this->endpoint = $this->id . '/mail/labels';
    }

    protected function createMailLabel(string $name): void
    {
        $this->verb = 'post';
        $this->body = [
            'name' => $name,
            'color' => '#ffffff',
        ];
        $this->endpoint = $this->id . '/mail/labels';
    }

    protected function deleteMailLabel(int $mailId): void
    {
        $this->verb = 'delete';
        $this->endpoint = $this->id . '/mail/labels/' . $mailId;
    }
}
