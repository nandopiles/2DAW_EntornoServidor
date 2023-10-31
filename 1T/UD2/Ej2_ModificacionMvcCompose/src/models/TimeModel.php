<?php

class TimeModel
{
    /**
     * get the current time (hours, minutes, seconds)
     *
     * @return String time
     */
    public function getTime()
    {
        date_default_timezone_set('Europe/Madrid');
        return date("H:i:s");
    }
}
