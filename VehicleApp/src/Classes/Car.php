<?php

namespace VehicleApp\Classes;

use VehicleApp\Interfaces\CarInterface;

class Car extends Vehicle implements CarInterface
{
    public function makeSound(): string
    {
        return "Vroom vroom!";
    }

    public function drive(): string
    {
        return "The {$this->name} is now driving";
    }
}