<?php
namespace FoodItems;

use Traits\getMethod;

abstract class FoodItem {
    use getMethod;

    protected string $name;
    protected string $description;
    protected float $price;

    public function __construct(string $name, string $description, float $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}
