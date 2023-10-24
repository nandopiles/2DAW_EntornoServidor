<?php

interface SalaryCalculatorInterface
{
    public function calculateSalary($hoursWorked, $hourlyRate);
}

class SalaryCalculator implements SalaryCalculatorInterface
{
    public function CalculateSalary($hoursWorked, $hourlyRate)
    {
        return $hoursWorked * $hourlyRate;
    }
}

class EmployeeDetails
{
    private $calculator;
    public $hoursWorked;
    public $hourlyRate;

    public function __construct(SalaryCalculatorInterface $calculator)
    {
        $this->calculator = $calculator;
    }

    public function GetSalary()
    {
        return $this->calculator->calculateSalary($this->hoursWorked, $this->hourlyRate);
    }
}
