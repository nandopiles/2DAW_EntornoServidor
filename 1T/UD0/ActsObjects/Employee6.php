<?php

class Employee6 extends Worker
{
    private $hoursWorked;
    private $hourValue;

    public function __construct($hoursWorked)
    {
        $this->hoursWorked = $hoursWorked;
        $this->hourValue = 3.50;
    }

    /**
     * Calcs the salary depending the hours that it worked and the value of the hour
     *
     * @return void
     */
    public function calcSalary()
    {
        return $this->getHoursWorked() * $this->getHourValue();
    }

    /**
     * Prints the info of the Worker (name and salary)
     *
     * @return void
     */
    public function printWorkerInfo()
    {
        return "{$this->getNameWorker()}'s salary is of {$this->getSalary()}€<br>";
    }

    /**
     * Get the value of hoursWorked
     */
    public function getHoursWorked()
    {
        return $this->hoursWorked;
    }

    /**
     * Set the value of hoursWorked
     *
     * @return  self
     */
    public function setHoursWorked($hoursWorked)
    {
        $this->hoursWorked = $hoursWorked;

        return $this;
    }

    /**
     * Get the value of hourValue
     */
    public function getHourValue()
    {
        return $this->hourValue;
    }

    /**
     * Set the value of hourValue
     *
     * @return  self
     */
    public function setHourValue($hourValue)
    {
        $this->hourValue = $hourValue;

        return $this;
    }
}
