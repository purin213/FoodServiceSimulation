<?php
namespace People\Customers;

use Restaurants\Restaurant;
use Invoices\Invoice;
use People\Person;

class Customer extends Person {
    public function __construct(){
        parent::__construct();
    }

    //UNTESTED
    public function interestedCategories(Restaurant $restaurant):array{
        $menu = $restaurant.getMenu();
        $randMenu = array_rand($menu, floor(count($menu)/4));
        $output = [];
        foreach ($randMenu as $food) {
            array_push($output, $menu[$food]);
        }
        return $output;
    }

    public function order(Restaurant $restaurant, array $categories):Invoice{
        return $restaurant->order($categories);
    }
}
