<?php

namespace VehicleApp\Interfaces;

interface PlaneInterface extends VehicleInterface
{
    public function fly(): string;
}