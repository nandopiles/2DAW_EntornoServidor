<?php

interface Worker
{
    public function work();

    public function eat();
}

class Factory
{
    private $workers = [];

    function __construct(array $workers)
    {
        $this->workers = $workers;
    }

    public function manage()
    {
        foreach ($this->workers as $worker) {
            $worker->work();
        }
    }

}

class MessHall
{
    private $workers = [];

    function __construct(array $workers)
    {
        $this->workers = $workers;
    }

    public function manage()
    {
        foreach ($this->workers as $worker) {
            $worker->eat();
        }
    }

}

class Human implements Worker
{
    public function work()
    {
        return "Human works";
    }

    public function eat()
    {
        return "Human eats";
    }
}

class Robot implements Worker
{
    public function work()
    {
        return "Robot works";
    }

    public function eat()
    {
        throw new Exception("Robots can't eat");
    }
}