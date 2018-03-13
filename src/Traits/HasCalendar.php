<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasCalendar
{
    protected function calendar(): void
    {
        $this->endpoint = $this->id . '/calendar';
    }

    protected function calendarEvent(int $eventId): void
    {
        $this->endpoint = $this->id . '/calendar/' . $eventId;
    }

    protected function respondToEvent(int $eventId, string $response): void
    {
        $this->verb = 'put';
        $this->body = ['response' => $response];
        $this->endpoint = $this->id . '/calendar/' . $eventId;
    }

    protected function eventAttendees(int $eventId): void
    {
        $this->endpoint = $this->id . '/calendar/' . $eventId . '/attendees';
    }
}
