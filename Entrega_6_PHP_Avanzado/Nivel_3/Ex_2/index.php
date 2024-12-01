<?php

require 'vendor/autoload.php';
include_once 'classes/Planet.php';
require 'controller/ControllerDistance.php';

$ControlerDistance = new ControllerDistance();

$mercuty = new Planet(name: "Mercury", distanceToEarth: 91691000);
$venus = new Planet(name: "Venus", distanceToEarth: 41400000);
$mars = new Planet(name: "Mars", distanceToEarth: 78340000);
$jupiter = new Planet(name: "Jupiter", distanceToEarth: 628730000);
$saturn = new Planet(name: "Saturn", distanceToEarth: 1275000000);
$uranus = new Planet(name: "Uranus", distanceToEarth: 2723950000);
$neptune = new Planet(name: "Neptune", distanceToEarth: 4351400000);

$planets = [$mercuty, $venus, $mars, $jupiter, $saturn, $uranus, $neptune];

foreach($planets as $planet){
    echo "The distance to".$planet->getName()." is ".$planet->getDistanceToEarth()." km\n";
    echo "You need to walk ".$ControlerDistance->calcDistance(planet: $planet)." steps to reach ".$planet->getName()."\n";
}
