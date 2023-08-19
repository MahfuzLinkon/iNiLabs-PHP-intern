<?php

use App\classes\Employee;

require_once __DIR__ . '/app/classes/Employee.php';


$employee = new Employee(1, 'Mahfuzur Rahman', 1000);


$employee->setSalary(20000);
echo 'Employee Salary: ' . $employee->getSalary();
