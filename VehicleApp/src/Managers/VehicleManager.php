<?php

namespace VehicleApp\Managers;

use VehicleApp\Classes\Vehicle;
use VehicleApp\Interfaces\VehicleInterface;

class VehicleManager
{
    private array $vehicles = [];

    public function addVehicles(VehicleInterface $vehicle): void
    {
        $this->vehicles[] = $vehicle;
    }

    public function getVehicleInfos(): array
    {
        return array_map(fn(Vehicle $vehicle) => $vehicle->getInfo(), $this->vehicles);
    }
}