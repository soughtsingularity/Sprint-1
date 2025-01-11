<?php

include 'classes/Car.php';

$m3 = new Car(brand: "BMW", licensePlait: "1234ABC", fuelType: "Diesel", maxSpeed: 250);

$m3->boost();