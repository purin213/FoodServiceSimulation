<?php
namespace FoodItems;

use Traits\GetterTrait\getVariable;

abstract class FoodItem {
    use getVariable;

    protected string $name;
    protected string $description;
    protected float $price;

    public function __construct(string $name, string $description, float $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}
