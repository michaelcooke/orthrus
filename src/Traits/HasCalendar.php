<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasCalendar
{
    protected function calendar(): void
    {
        $this->endpoint = $this->id . '/calendar';
    }

    protected function calendarEvent(Int $eventId): void
    {
        $this->endpoint = $this->id . '/calendar/' . $eventId;
    }

    protected function respondToEvent(Int $eventId, String $response): void
    {
        $this->verb = 'put';
        $this->body = ['response' => $response];
        $this->endpoint = $this->id . '/calendar/' . $eventId;
    }

    protected function eventAttendees(Int $eventId): void
    {
        $this->endpoint = $this->id . '/calendar/' . $eventId . '/attendees';
    }
}
