<?php
namespace People;

require_once 'vendor/autoload.php';
use Faker\Factory;

abstract class Person {
    protected string $name;
    protected int $age;
    protected string $address;

    public function __construct() {
        $faker = Factory::create();
        $this->name = $faker->firstName() . " " . $faker->lastName();
        $this->age = rand(18, 55);
        $this->address = $faker->address();
    }
}
