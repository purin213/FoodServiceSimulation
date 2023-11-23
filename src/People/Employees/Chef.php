<?php
namespace Person\Employees;

use FoodOrders\FoodOrder;
use People\Employees\Employee;

class Chef extends Employee{
    public function __construct($employeeId, $salary){
        parent::__construct(
            $this->employeeId = $employeeId,
            $this->salary = $salary
        );
    }
    public function prepareFood(FoodOrder $foodOrder): string{
        return "Order for " . foodOrder.getItems() . " served!";
    }
}
