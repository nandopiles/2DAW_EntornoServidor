<?php

interface Door
{
    public function lock();
    public function unlock();
    public function open();
    public function close();
    public function timeOutCallback();
    public function proximityCallback();
}

class Sensor
{
    public function register(Door $door)
    {
        while (true) {
            if ($this->isPersonClose()) {
                $door->proximityCallback();
                break;
            }
        }
    }

    private function isPersonClose()
    {
        return random_int(0,1);
    }
}

class SensingDoor implements Door
{
    private $locked;
    private $opened;

    function __construct(Sensor $sensor)
    {
        $sensor->register($this);
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
        throw new Exception("Not Implemented");
    }

    public function proximityCallback()
    {
        $this->opened = true;
    }
}

class Timer
{
    public function register($timeOut, Door $door)
    {
        sleep($timeOut);
        $door->timeOutCallback();
    }
}

class TimedDoor implements Door
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

    public function proximityCallback()
    {
        throw new Exception("Not Implemented");
    }
}