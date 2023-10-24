<?php

class Manager extends Worker
{
    private $hoursWorked;
    private $hourValue;

    public function __construct($hoursWorked)
    {
        $this->hoursWorked = $hoursWorked;
        $this->hourValue = 3.5 + (3.5 * 0.10);
    }

    public function calcSalary()
    {
        return $this->getHoursWorked() * $this->getHourValue();
    }

    public function printWorkerInfo()
    {
        return "My name is {$this->getNameWorker()}, I'm Manager and my salary is of {$this->getSalary()}€<br>";
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
