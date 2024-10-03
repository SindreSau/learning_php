<?php

namespace VehicleApp\Classes;

use VehicleApp\Interfaces\PlaneInterface;

class Plane extends Vehicle implements PlaneInterface
{
    public function makeSound(): string
    {
        return "Whoosh";
    }

    public function fly(): string
    {
        return "The {$this->name} is now flying";
    }

}
