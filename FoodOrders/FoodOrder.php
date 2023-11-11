<?php
namespace FoodOrders;

abstract class FoodOrder {
    protected array $items;
    protected DateTime $orderTime;

    public function __construct(array $items) {
        $this->items = $items;
        $this->orderTime = new DateTime()->format('H:i');
    }
}
