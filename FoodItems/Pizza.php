<?php
namespace FoodItems;

class Pizza extends FoodItem {
    public function __construct(){
        parent::__construct (
            "pizza",
            "cheesy and flat",
            20.00
        );
    }
}
