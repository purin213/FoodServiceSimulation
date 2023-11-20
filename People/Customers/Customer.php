<?php
namespace People\Customers;

use Restaurants\Restaurant;
use Invoices\Invoice;
use People\Person;

class Customer extends Person {
    public function __construct(){
        parent::__construct();
    }

    public function interestedCategories(Restaurant $restaurant): array{
        $menu = $restaurant->getClassVariable('menu');
        $randMenu = array_rand($menu, floor(count($menu)/2));
        $output = [];
        foreach ($randMenu as $food) {
            array_push($output, $menu[$food]);
        }
        return $output;
    }

    public function order(Restaurant $restaurant):Invoice{
        return $restaurant->order($this->interestedCategories($restaurant));
    }
}
