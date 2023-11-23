<?php
namespace FoodItems;

class Fettuchine extends FoodItem {
    public function __construct(){
        parent::__construct (
            "fettuchine",
            "cheesy and flat",
            12.00
        );
    }
}
