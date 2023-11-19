<?php
namespace Person\Employee;
use Restaurants\Restaurant;
use FoodOrders\FoodOrder;

class Chef extends Employee{
    public function __construct(int $employeeId, float $salary){
        parent::__construct();
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }
    public function prepareFood(FoodOrder $foodOrder): string{
        return "Order for " . foodOrder.getItems() . " served!";
    }
}
