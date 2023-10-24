<?php

class Employee
{
    private $nameEmployee;
    private $salary;


    // /**
    //  * __construct => crappy version of overload constructs
    //  *
    //  * @param  array $values
    //  * @return void
    //  */
    // public function __construct(...$values)
    // {
    //     $this->nameEmployee = $values[0];
    //     if ($values[1] != null)
    //         $this->salary = $values[1];
    //     else
    //         $this->salary = 1000;
    // }

    /**
     * __construct that calls to a specific function depending on the num of params passed by parameter
     *
     * @return void
     */
    public function __construct()
    {
        $params = func_get_args(); //Array with the params sent to the constructor
        $numParams = func_num_args();
        $functionConstructor = '__construct' . $numParams; //depending on the num of params we will call one function or other
        if (method_exists($this, $functionConstructor)) //checks if exists that function with that num of params
            call_user_func_array(array($this, $functionConstructor), $params); //calls to that function resending the params of the original __construct
    }

    /**
     * __construct1 of only 1 param
     *
     * @param  mixed $nameEmployee
     * @return void
     */
    function __construct1($nameEmployee)
    {
        $this->nameEmployee = $nameEmployee;
        $this->salary = 1000;
    }

    /**
     * __construct2 of 2 params
     *
     * @param  mixed $nameEmployee
     * @param  mixed $salary
     * @return void
     */
    function __construct2($nameEmployee, $salary)
    {
        $this->nameEmployee = $nameEmployee;
        $this->salary = $salary;
    }

    /**
     * __toString
     *
     * @return String
     */
    public function __toString()
    {
        return "My name is {$this->getNameEmployee()} and my salary is of {$this->getSalary()}$<br>";
    }


    /**
     * Confs the name and salary of the Employee
     *
     * @param  String $nameEmployee
     * @param  int $salary
     * @return void
     */
    function initializeEmployee($nameEmployee, $salary)
    {
        $this->setNameEmployee($nameEmployee);
        $this->setSalary($salary);
    }

    /**
     * Checks if the salary is enough to pay Taxes
     *
     * @return boolean
     */
    function isPayTaxes()
    {
        if ($this->getSalary() > 3000) {
            return true;
        }
        return false;
    }

    /**
     * Prints a welcome message
     *
     * @return void
     */
    function welcome()
    {
        $text = "My name is {$this->getNameEmployee()} and  I ";
        if ($this->isPayTaxes()) {
            $text .= "HAVE to pay Taxes";
        } else {
            $text .= "HAVE NOT to pay Taxes";
        }
        print($text . "<br>");
    }

    /**
     * Get the value of name
     */
    public function getNameEmployee()
    {
        return $this->nameEmployee;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setNameEmployee($nameEmployee)
    {
        $this->nameEmployee = $nameEmployee;

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
