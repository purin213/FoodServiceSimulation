<?php
namespace FoodItems;

class CheeseBurger extends FoodItem {
    public function __construct(){
        parent::__construct (
            "cheeseburger",
            "A burger with cheese",
            6.50
        );
    }
}
