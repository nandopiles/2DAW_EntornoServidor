<?php

namespace Ferran\App\Models;

class TimeModel
{
    /**
     * Gets the current time (hours, minutes, seconds)
     *
     * @return String time
     */
    public function getTime(): string
    {
        date_default_timezone_set('Europe/Madrid');
        return date("H:i:s");
    }
}
