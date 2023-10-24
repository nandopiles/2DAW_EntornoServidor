<?php

class Employee5 extends AbstractPerson
{
    private $nameEmployee;
    private $ageEmployee;
    private $salary;

    /**
     * Prints the info of the Employee
     *
     * @return void
     */
    public function printInfo()
    {
        return "I'm {$this->getNameEmployee()} and my age is -> {$this->getAgeEmployee()}<br>";
    }

    /**
     * Confs the personal info of the Employee
     *
     * @param  mixed $nameEmployee
     * @param  mixed $ageEmployee
     * @return void
     */
    public function pushInfo($nameEmployee, $ageEmployee)
    {
        $this->nameEmployee = $nameEmployee;
        $this->ageEmployee = $ageEmployee;
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

    /**
     * Get the value of nameEmployee
     */
    public function getNameEmployee()
    {
        return $this->nameEmployee;
    }

    /**
     * Set the value of nameEmployee
     *
     * @return  self
     */
    public function setNameEmployee($nameEmployee)
    {
        $this->nameEmployee = $nameEmployee;

        return $this;
    }

    /**
     * Get the value of ageEmployee
     */
    public function getAgeEmployee()
    {
        return $this->ageEmployee;
    }

    /**
     * Set the value of ageEmployee
     *
     * @return  self
     */
    public function setAgeEmployee($ageEmployee)
    {
        $this->ageEmployee = $ageEmployee;

        return $this;
    }
}
