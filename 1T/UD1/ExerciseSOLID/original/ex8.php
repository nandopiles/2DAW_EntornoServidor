<?php
class Lamp
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
    private Lamp $lamp;
    private $state;

    function __construct(Lamp $lamp)
    {
        $this->lamp = $lamp;
    }

    public function toggle()
    {
        $this->state = !$this->state;
        $buttonOn = $this->state;
        if ($buttonOn) {
            $this->lamp->turnOn();
        } else {
            $this->lamp->turnOff();
        }
    }

}