<?php

namespace VehicleApp\Classes;

use VehicleApp\Interfaces\VehicleInterface;

abstract class Vehicle implements VehicleInterface
{
    protected string $name;
    protected int $year;

    /**
     * @param string $name
     * @param int $year
     */
    public function __construct(string $name, int $year)
    {
        $this->name = $name;
        $this->year = $year;
    }

    public function getInfo(): string
    {
        return "This is a {$this->year} {$this->name}\n";
    }
}