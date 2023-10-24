<?php

class Duck
{
    public function quack()
    {
        echo "Quack...";
    }

    public function swim()
    {
        echo "Swim...";
    }
}

class ElectronicDuck extends Duck
{
    private $on = false;

    public function quack()
    {
        if ($this->on) {
            echo "Electronic duck quack...";
        } else {
            throw new RuntimeException("Can't quack when off");
        }
    }

    public function swim()
    {
        if ($this->on) {
            echo "Electronic duck swim";
        } else {
            throw new RuntimeException("Can't swim when off");
        }
    }

    public function turnOn()
    {
        $this->on = true;
    }

    public function turnOff()
    {
        $this->on = false;
    }
}

class Pool
{
    function __construct()
    {
        $this->run();
    }
    public function run()
    {
        $donaldDuck = new Duck();
        $electricDuck = new ElectronicDuck();
        $this->quack([$donaldDuck, $electricDuck]);
        $this->swim([$donaldDuck, $electricDuck]);
    }

    private function quack(array $ducks)
    {
        foreach ($ducks as $duck) {
            $duck->quack();
        }
    }

    private function swim(array $ducks)
    {
        foreach ($ducks as $duck) {
            $duck->swim();
        }
    }
}
