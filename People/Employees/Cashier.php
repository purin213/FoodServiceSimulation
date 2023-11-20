<?php
namespace Person\Employees;

use FoodOrders\FoodOrder;
use Invoices\Invoice;
use People\Employees\Employee;
use People\Employees\Chef;

class Cashier extends Employee{
    public function __construct($employeeId, $salary){
        parent::__construct(
            $this->employeeId = $employeeId,
            $this->salary = $salary
        );
    }
    //Needs chef to generate
    public function generateOrder(array $foodItem, Chef $chef): FoodOrder{
        $foodOrder = new FoodOrder($foodItem);
        echo $chef->prepareFood($foodOrder);
        return $foodOrder;
    }
    public function generateInvoice(FoodOrder $foodOrder): Invoice{
        $finalPrice = array_reduce($foodOrder->getClassVariable('items'), function ($carry, $item) {
            return $carry + $item->getClassVariable('price');
        });
        return new Invoice($finalPrice, rand(1, 30));
    }
}
