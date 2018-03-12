<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasCalendar
{
    protected function calendar()
    {
        $this->endpoint = $this->id . '/calendar';
    }

    protected function calendarEvent($event)
    {
        $this->endpoint = $this->id . '/calendar/' . $event;
    }

    protected function respondToEvent($event, $response)
    {
        $this->verb = 'put';
        $this->body = ['response' => $response];
        $this->endpoint = $this->id . '/calendar/' . $event;
    }

    protected function eventAttendees($event)
    {
        $this->endpoint = $this->id . '/calendar/' . $event . '/attendees';
    }
}
