<?php

namespace VehicleApp\Interfaces;

interface VehicleInterface
{
    public function getInfo(): string;

    public function makeSound(): string;
}