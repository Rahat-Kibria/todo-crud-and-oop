<?php

namespace App\Oop;

class Employee
{
    private $salary;
    public function getSalary(): int
    {
        return $this->salary;
    }
    public function setSalary($salary_pass)
    {
        $this->salary = $salary_pass;
    }
}
