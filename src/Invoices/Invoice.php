<?php
namespace Invoices;

use DateTimeZone;
use DateTime;
use Traits\getMethod;

class Invoice {
    use getMethod;
    protected float $finalPrice;
    protected string $orderTime;
    protected int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice) {
        $this->finalPrice = $finalPrice;
        $this->orderTime = (new DateTime())->setTimezone(new DateTimeZone('Asia/Tokyo'))->format('Y-m-d H:i:s');
        $this->estimatedTimeInMinutes = rand(1, 30);
    }
}

