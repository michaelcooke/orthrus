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
        $this->endpoint = $this->id . "/calendar/event/" . $event;
    }

    protected function respondToEvent($event)
    {
        $this->verb = "put";
        $this->endpoint = $this->id . "/calendar/event/" . $event;
    }

    protected function getEventAttendees($event)
    {
        $this->verb = "get";
        $this->endpoint = $this->id . "/calendar/event/" . $event . "/attendees";
    }
}
