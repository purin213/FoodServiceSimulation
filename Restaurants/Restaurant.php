<?php
namespace Restaurants;

use FoodItems\CheeseBurger;
use FoodItems\Fettuchine;
use FoodItems\Pizza;
use FoodItems\Spaghetti;
use Traits\GetterTrait;

class Restaurant {
    protected array $menu;
    public function __construct() {
        $this->menu = [new CheeseBurger(), new Fettuchine(), new Pizza(), new Spaghetti()];
    }
}
