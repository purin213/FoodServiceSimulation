<?php
namespace Restaurants;

use FoodItems\CheeseBurger;
use FoodItems\Fettuchine;
use FoodItems\Pizza;
use FoodItems\Spaghetti;
use Invoices\Invoice;
use Traits\getMethod;


class Restaurant {
    use getMethod;

    protected array $menu;
    protected array $cashiers;
    protected array $chefs;
    public function __construct($cashiers, $chefs) {
        $this->menu = [new CheeseBurger(), new Fettuchine(), new Pizza(), new Spaghetti()];
        $this->cashiers = $cashiers;
        $this->chefs = $chefs;
    }
    public function order(array $categories): Invoice{
        # get random workers from pool
        $availableCashier = $this->cashiers[array_rand($this->cashiers, 1)];
        $availableChef = $this->chefs[array_rand($this->chefs, 1)];
        # generate desired objects
        $foodOrder = $availableCashier->generateOrder($categories, $availableChef);
        return $availableCashier->generateInvoice($foodOrder);
    }
}
