<?php
namespace FoodOrders;

use DateTimeZone;
use DateTime;
use Traits\GetterTrait\getMethod;

abstract class FoodOrder {
    use getMethod;

    protected array $items;
    protected string $orderTime;

    public function __construct(array $items) {
        $this->items = $items;
        $this->orderTime = (new DateTime())->setTimezone(new DateTimeZone('Asia/Tokyo'))->format('Y-m-d H:i:s');
    }
}
