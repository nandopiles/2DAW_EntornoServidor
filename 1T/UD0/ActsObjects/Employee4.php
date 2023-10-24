<?php

class Employee4 extends Person2
{
    private $salary;

    public function __construct($namePerson, $agePerson, $salary)
    {
        parent::__construct($namePerson, $agePerson);
        $this->salary = $salary;
    }

    /**
     * prints the amount of salary of the Person
     *
     * @return String
     */
    public function printSalary()
    {
        return "My salary is of {$this->getSalary()}<br>";
    }

    /**
     * __toString => Override(parent)
     *
     * @return void
     */
    public function __toString()
    {
        return "I'm {$this->getNamePerson()}, my age is -> {$this->getAgePerson()} and my salary is => {$this->getSalary()  }<br>";
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
