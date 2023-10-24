<?php
interface IDuck {    
    public function quack();
    public function swim();
}

class Duck implements IDuck
{
    /**
     * Quacks
     *
     * @return void
     */
    public function quack()
    {
        echo "Quack...";
    }

    /**
     * Swims
     *
     * @return void
     */
    public function swim()
    {
        echo "Swim...";
    }
}

class ElectronicDuck implements IDuck
{
    private $on = false;

    /**
     * Checks if the electronic duck is on it will quack
     *
     * @return void
     */
    public function quack()
    {
        if ($this->getOn()) {
            echo "Electronic duck quack...";
        } else {
            throw new RuntimeException("Can't quack when off");
        }
    }

    /**
     * If the electronic duck is on it will swim
     *
     * @return void
     */
    public function swim()
    {
        if ($this->getOn()) {
            echo "Electronic duck swim";
        } else {
            throw new RuntimeException("Can't swim when off");
        }
    }

    /**
     * Turns on the duck
     *
     * @return void
     */
    public function turnOn()
    {
        $this->setOn(true);
    }

    /**
     * Turns off the duck
     *
     * @return boolean
     */
    public function turnOff()
    {
        $this->setOn(false);
    }

    /**
     * Get the value of on
     */
    public function getOn()
    {
        return $this->on;
    }

    /**
     * Set the value of on
     *
     * @return  self
     */
    public function setOn($on)
    {
        $this->on = $on;

        return $this;
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
