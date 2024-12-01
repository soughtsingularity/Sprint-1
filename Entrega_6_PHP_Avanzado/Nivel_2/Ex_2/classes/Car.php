<?php

include 'traits/Turbo.php';

class Car{
    use Turbo;

    private $brand;
    private $licensePlait;
    private $fuelType;

    private $maxSpeed;

    public function __construct($brand, $licensePlait, $fuelType, $maxSpeed){
        $this->brand = $brand;
        $this->licensePlait = $licensePlait;
        $this->fuelType = $fuelType;
        $this->maxSpeed = $maxSpeed;
    }
}
