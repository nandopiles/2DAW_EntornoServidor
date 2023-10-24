<?php

class SalaryCalculator  
 {  
     public function CalculateSalary($hoursWorked, $hourlyRate){
        return $hoursWorked * $hourlyRate;  
     }
 }
  
class EmployeeDetails  
{  
    public $HoursWorked;  
    public $HourlyRate; 
    public function GetSalary()  
    {  
        $salaryCalculator = new SalaryCalculator();  
        return $salaryCalculator->CalculateSalary($this->HoursWorked, $this->HourlyRate);  
    }
}  