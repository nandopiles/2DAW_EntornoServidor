<?php
abstract class Worker
{
    private $nameWorker;
    private $salary;

    abstract public function calcSalary();
    abstract public function printWorkerInfo();

    /**
     * Get the value of nameWorker
     */ 
    public function getNameWorker()
    {
        return $this->nameWorker;
    }

    /**
     * Set the value of nameWorker
     *
     * @return  self
     */ 
    public function setNameWorker($nameWorker)
    {
        $this->nameWorker = $nameWorker;

        return $this;
    }

    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }
}
