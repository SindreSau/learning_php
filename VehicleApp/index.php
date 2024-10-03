<?php

use VehicleApp\Classes\Car;
use VehicleApp\Classes\Plane;
use VehicleApp\Managers\VehicleManager;

require __DIR__ . '/vendor/autoload.php';

$vehicleManager = new VehicleManager();

$car = new Car("Nissan X-trail", 2009);
$plane = new Plane("Boeing 747", 2013);

$vehicleManager->addVehicles($car);
$vehicleManager->addVehicles($plane);

$vehicleInfos = $vehicleManager->getVehicleInfos();

foreach ($vehicleInfos as $vehicleInfo) {
    echo $vehicleInfo . "\n";
}

echo $car->drive() . "\n";
echo $plane->fly() . "\n";