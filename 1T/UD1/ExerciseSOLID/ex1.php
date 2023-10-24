<?php

class Employee
{
    private $empId;
    private $name;
    private $monthlySalary;
    private $manager;
    private $leavesTaken;
    private $yearsInOrg;
    private $leavesLeftPreviously = [];

    function __construct(
        $empId,
        $monthlySalary,
        $manager,
        $name,
        $leavesTaken,
        $leavesLeftPreviously
    ) {
        $this->empId = $empId;
        $this->name = $name;
        $this->monthlySalary = $monthlySalary;
        $this->manager = $manager;
        $this->leavesTaken = $leavesTaken;
        $this->leavesLeftPreviously = $leavesLeftPreviously;
        $this->yearsInOrg = count($leavesLeftPreviously);
    }

    /**
     * Calcs the total of Leaves available
     *
     * @return void
     */
    public function getTotalLeavesLeftPreviously()
    {
        ($this->getYearsInOrg() < 3) ? $years = $this->getYearsInOrg() : $years = 3;
        $this->setLeavesLeftPreviously(0);
        for ($i = 0; $i < $years; $i++) {
            $this->setLeavesLeftPreviously($this->getLeavesLeftPreviously() + $this->getLeavesLeftPreviously()[$this->getYearsInOrg() - $i - 1]);
        }
    }

    /**
     * Get the value of empId
     */
    public function getEmpId()
    {
        return $this->empId;
    }

    /**
     * Set the value of empId
     *
     * @return  self
     */
    public function setEmpId($empId)
    {
        $this->empId = $empId;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of monthlySalary
     */
    public function getMonthlySalary()
    {
        return $this->monthlySalary;
    }

    /**
     * Set the value of monthlySalary
     *
     * @return  self
     */
    public function setMonthlySalary($monthlySalary)
    {
        $this->monthlySalary = $monthlySalary;

        return $this;
    }

    /**
     * Get the value of leavesTaken
     */
    public function getLeavesTaken()
    {
        return $this->leavesTaken;
    }

    /**
     * Set the value of leavesTaken
     *
     * @return  self
     */
    public function setLeavesTaken($leavesTaken)
    {
        $this->leavesTaken = $leavesTaken;

        return $this;
    }

    /**
     * Get the value of manager
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set the value of manager
     *
     * @return  self
     */
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get the value of yearsInOrg
     */
    public function getYearsInOrg()
    {
        return $this->yearsInOrg;
    }

    /**
     * Set the value of yearsInOrg
     *
     * @return  self
     */
    public function setYearsInOrg($yearsInOrg)
    {
        $this->yearsInOrg = $yearsInOrg;

        return $this;
    }

    /**
     * Get the value of leavesLeftPreviously
     */
    public function getLeavesLeftPreviously()
    {
        return $this->leavesLeftPreviously;
    }

    /**
     * Set the value of leavesLeftPreviously
     *
     * @return  self
     */
    public function setLeavesLeftPreviously($leavesLeftPreviously)
    {
        $this->leavesLeftPreviously = $leavesLeftPreviously;

        return $this;
    }
}

class EmployeeFormatter
{
    const LEAVES_ALLOWED = 27;
    private $employee;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    /**
     * Format the info to HTML
     *
     * @return void
     */
    public function toHtml()
    {
        $str = "<div>" .
            "<h1>Employee Info</h1>" .
            "<div id='emp" . $this->employee->getEmpId() . "'>" .
            "<span>" . $this->employee->getName() . "</span>" .
            "<div class='left'>" .
            "<span>Leaves Left :</span>" .
            "<span>Annual salary:</span>" .
            "<span>Manager:</span>" .
            "<span>Reimbursable leaves:</span>" .
            "</div>";
        $str .= "<div class='right'><span>" . (self::LEAVES_ALLOWED - $this->employee->getLeavesTaken()) . "</span>";
        $str .= "<span>" . round($this->employee->getMonthlySalary() * 12) . "</span>";
        $str .= "<span>{$this->formatManager($this->employee->getManager())}</span>";
        $str .= "<span>" . $this->employee->getLeavesLeftPreviously() . "</span>";
        return $str . "</div> </div>";
    }

    /**
     * Returns the manager or says if the Employee is not a manager
     *
     * @param  mixed $manager
     * @return void
     */
    public function formatManager($manager)
    {
        return ($manager !== null) ? $manager : "None";
    }
}
