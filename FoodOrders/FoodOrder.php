<?php
namespace FoodOrders;

use DateTimeZone;
use DateTime;

abstract class FoodOrder {
    protected array $items;
    protected string $orderTime;

    public function __construct(array $items) {
        $this->items = $items;
        $this->orderTime = (new DateTime())->setTimezone(new DateTimeZone('Asia/Tokyo'))->format('Y-m-d H:i:s');
    }
}
