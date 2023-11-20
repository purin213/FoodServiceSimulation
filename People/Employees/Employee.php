<?php
namespace People\Employees;

use People\Person;

class Employee extends Person{
    protected int $employeeId;
    protected float $salary;

    public function __construct(int $employeeId, float $salary){
        parent::__construct();
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }
}
