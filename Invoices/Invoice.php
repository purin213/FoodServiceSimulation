<?php
namespace Invoice;

use DateTimeZone;
use DateTime;

abstract class Invoice {
    protected float $finalPrice;
    protected string $orderTime;
    protected int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice, int $estimatedTimeInMinutes) {
        $this->finalPrice = $finalPrice;
        $this->orderTime = (new DateTime())->setTimezone(new DateTimeZone('America/Chicago'))->format('Y-m-d H:i:s');
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }
}

