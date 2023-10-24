<?php

class Employee2 extends Person
{
    private $salary;

    public function __construct($salary)
    {
        $this->salary = $salary;
    }

    /**
     * Prints the amount of salary of the Person
     *
     * @return String
     */
    public function printSalary()
    {
        return "My salary is of {$this->getSalary()}<br>";
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
