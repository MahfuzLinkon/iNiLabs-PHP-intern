<?php

namespace App\classes;

class Employee
{
    private $id;
    private $name;
    private $salary;

    public function __construct($id, $name, $salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
    }

    public function setSalary($amount)
    {
        $this->salary = $amount;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}
