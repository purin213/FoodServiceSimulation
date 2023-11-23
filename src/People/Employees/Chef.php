<?php
namespace People\Employees;

use FoodOrders\FoodOrder;
use People\Employees\Employee;
use Traits\getMethod;

class Chef extends Employee{
    use getMethod;
    public function __construct($employeeId, $salary){
        parent::__construct(
            $this->employeeId = $employeeId,
            $this->salary = $salary
        );
    }
    public function prepareFood(FoodOrder $foodOrder): string{
        $items = $foodOrder->getClassVariable("items");
        return "Order for " . $items . " served!" . PHP_EOL;
    }
}
