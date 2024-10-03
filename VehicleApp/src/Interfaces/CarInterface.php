<?php

namespace VehicleApp\Interfaces;

interface CarInterface extends VehicleInterface
{
    public function drive(): string;
}