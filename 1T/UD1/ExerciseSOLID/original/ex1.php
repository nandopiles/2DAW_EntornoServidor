<?php

class Employee
{
    const LEAVES_ALLOWED = 27;
    private $empId;
    private $name;
    private $monthlySalary;
    private $manager;
    private $leavesTaken;
    private $yearsInOrg;
    private $leavesLeftPreviously = [];

    function __construct($empId, $monthlySalary, $manager, $name, $leavesTaken,
        $leavesLeftPreviously) {
        $this->empId = $empId;
        $this->name = $name;
        $this->monthlySalary = $monthlySalary;
        $this->manager = $manager;
        $this->leavesTaken = $leavesTaken;
        $this->leavesLeftPreviously = $leavesLeftPreviously;
        $this->yearsInOrg = count($leavesLeftPreviously);
    }

    public function toHtml()
    {
        $str = "<div>".
        "<h1>Employee Info</h1>".
        "<div id='emp".$this->empId."'>".
        "<span>".$this->name."</span>".
            "<div class='left'>".
            "<span>Leaves Left :</span>".
            "<span>Annual salary:</span>".
            "<span>Manager:</span>".
            "<span>Reimbursable leaves:</span>".
            "</div>";
        $str .= "<div class='right'><span>".(self::LEAVES_ALLOWED - $this->leavesTaken)."</span>";
        $str .= "<span>".round($this->monthlySalary * 12)."</span>";
        if ($this->manager != null) {
            $str .= "<span>".$this->manager."</span>";
        } else {
            $str .= "<span>None</span>";
        }
        $years = 3;
        if ($this->yearsInOrg < 3) {
            $years = $this->yearsInOrg;
        }
        $leavesLeftPreviously = 0;
        for ($i = 0; $i < $years; $i++) {
            $leavesLeftPreviously += $this->leavesLeftPreviously[$this->yearsInOrg - $i - 1];
        }
        $str .= "<span>".$leavesLeftPreviously."</span>";
        return $str."</div> </div>";
    }
}
