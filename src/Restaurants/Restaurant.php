<?php
namespace Restaurants;

use FoodItems\CheeseBurger;
use FoodItems\Fettuchine;
use FoodItems\Pizza;
use FoodItems\Spaghetti;
use Invoices\Invoice;
use Traits\GetterTrait\getMethod;

class Restaurant {
    use getMethod;

    protected array $menu;
    protected array $employees;
    public function __construct($employees) {
        $this->menu = [new CheeseBurger(), new Fettuchine(), new Pizza(), new Spaghetti()];
        $this->employees = $employees;
    }
    public function order(array $categories): Invoice{
    }
}
