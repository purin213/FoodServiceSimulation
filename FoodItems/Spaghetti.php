<?php
namespace FoodItems;

class Spaghetti extends FoodItem {
    public function __construct(){
        parent::__construct (
            "spaghetti",
            "not so flat",
            9.40
        );
    }
}
