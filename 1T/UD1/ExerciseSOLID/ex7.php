<?php

interface Door
{
    public function lock();
    public function unlock();
    public function open();
    public function close();
}

interface TimerClient
{
    public function timeOutCallback();
}

interface SensorClient
{
    public function proximityCallback();
}

class Sensor
{
    public function isPersonClose()
    {
        return random_int(0, 1);
    }
}

class SensingDoor implements Door, SensorClient
{
    private $locked;
    private $opened;

    function __construct(Sensor $sensor)
    {
        if ($sensor->isPersonClose()) {
            $this->proximityCallback();
        }
    }

    public function lock()
    {
        $this->locked = true;
    }

    public function unlock()
    {
        $this->locked = false;
    }

    public function open()
    {
        if (!$this->locked) {
            $this->opened = true;
        }
    }

    public function close()
    {
        $this->opened = false;
    }

    public function proximityCallback()
    {
        $this->opened = true;
    }
}

class Timer
{
    public function register($timeOut, TimerClient $door)
    {
        sleep($timeOut);
        $door->timeOutCallback();
    }
}

class TimedDoor implements Door, TimerClient
{
    const TIME_OUT = 10;
    private $locked;
    private $opened;

    function __construct(Timer $timer)
    {
        $timer->register(self::TIME_OUT, $this);
    }

    public function lock()
    {
        $this->locked = true;
    }

    public function unlock()
    {
        $this->locked = false;
    }

    public function open()
    {
        if (!$this->locked) {
            $this->opened = true;
        }
    }

    public function close()
    {
        $this->opened = false;
    }

    public function timeOutCallback()
    {
        $this->locked = true;
    }
}
