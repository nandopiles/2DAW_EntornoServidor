<?php

interface HumanWorker
{
    public function work();
    public function eat();
}

interface RobotWorker
{
    public function work();
}

interface Manager
{
    public function manage();
}

class Factory implements Manager
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

class MessHall implements Manager
{
    private $workers = [];

    function __construct(array $workers)
    {
        $this->workers = $workers;
    }
    
    /**
     * 
     *
     * @return void
     */
    public function manage()
    {
        foreach ($this->workers as $worker) {
            $worker->eat();
        }
    }
}

class Human implements HumanWorker
{
    /**
     * Inicialice the action of working (Human)
     *
     * @return void
     */
    public function work()
    {
        return "Human works";
    }

    /**
     * Inicialice the action of eating (Human)
     *
     * @return void
     */
    public function eat()
    {
        return "Human eats";
    }
}

class Robot implements RobotWorker
{
    /**
     * Inicialice the action of working (Robot)
     *
     * @return void
     */
    public function work()
    {
        return "Robot works";
    }
}
