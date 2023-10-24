<?php

class Person
{
    protected $namePerson;
    protected $agePerson;

    /**
     * Confs the info of the Person
     *
     * @param  mixed $namePerson
     * @param  mixed $agePerson
     * @return void
     */
    public function pushInfo($namePerson, $agePerson)
    {
        $this->namePerson = $namePerson;
        $this->agePerson = $agePerson;
    }

    /**
     * __toString
     *
     * @return void
     */
    public function __toString()
    {
        return "My name is {$this->getNamePerson()} and I'm {$this->getAgePerson()}<br>";
    }

    /**
     * Get the value of namePerson
     */
    public function getNamePerson()
    {
        return $this->namePerson;
    }

    /**
     * Set the value of namePerson
     *
     * @return  self
     */
    public function setNamePerson($namePerson)
    {
        $this->namePerson = $namePerson;

        return $this;
    }

    /**
     * Get the value of agePerson
     */
    public function getAgePerson()
    {
        return $this->agePerson;
    }

    /**
     * Set the value of agePerson
     *
     * @return  self
     */
    public function setAgePerson($agePerson)
    {
        $this->agePerson = $agePerson;

        return $this;
    }
}
