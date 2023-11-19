<?php
namespace Person\Employees;

use Restaurants\Restaurant;
use FoodOrders\FoodOrder;
use Invoices\Invoice;
use People\Employees\Employee;
use Traits\GetterTrait\getMethod;

class Cashier extends Employee{
    use getMethod;

    public function __construct(int $employeeId, float $salary){
        parent::__construct(
            $this->employeeId = $employeeId,
            $this->salary = $salary
        );
    }
    public function generateOrder(array $foodItem, Restaurant $restaurant): FoodOrder{
        return new FoodOrder($restaurant[$foodItem]);
    }
    public function generateInvoice(FoodOrder $foodOrder): Invoice{
        $finalPrice = array_reduce($foodOrder->getClassVariable('items'), function ($carry, $item) {
            return $carry + $item->getClassVariable('price');
        });
        return new Invoice($finalPrice, rand(1, 30));
    }
}
