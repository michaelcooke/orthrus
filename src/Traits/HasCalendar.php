<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasCalendar
{
    protected function getCalendar()
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/calendar";
    }

    protected function getCalendarEvent($event)
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/calendar/" . $event;
    }

    protected function respondToEvent($event, $response)
    {
        $this->verb = "put";
        $this->body = ["response" => $response];
        $this->endpoint = $this->id . "/calendar/" . $event;
    }

    protected function getEventAttendees($event)
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/calendar/" . $event . "/attendees";
    }
}
