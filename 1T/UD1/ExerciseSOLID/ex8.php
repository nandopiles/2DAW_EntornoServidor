<?php
interface SwitchableDevice
{
    public function turnOn();
    public function turnOff();
}

class Lamp implements SwitchableDevice
{
    private int $color;

    public function turnOn()
    {
        echo "Lamp turned on";
    }

    public function turnOff()
    {
        echo "Lamp turned off";
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}

class Button
{
    private SwitchableDevice $lamp;
    private $state;

    function __construct(SwitchableDevice $lamp)
    {
        $this->lamp = $lamp;
    }

    public function toggle()
    {
        $this->state = !$this->state;
        if ($this->state) {
            $this->lamp->turnOn();
        } else {
            $this->lamp->turnOff();
        }
    }
}
