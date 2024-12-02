<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
include_once 'classes/Planet.php';
require 'controller/ControllerGoingToPlanet.php';

$ControllerGoingToPlanet = new ControllerGoingToPlanet();

$mercury = new Planet(name: "Mercury", distanceToEarth: 91691000);
$venus = new Planet(name: "Venus", distanceToEarth: 41400000);
$mars = new Planet(name: "Mars", distanceToEarth: 78340000);
$jupiter = new Planet(name: "Jupiter", distanceToEarth: 628730000);
$saturn = new Planet(name: "Saturn", distanceToEarth: 1275000000);
$uranus = new Planet(name: "Uranus", distanceToEarth: 2723950000);
$neptune = new Planet(name: "Neptune", distanceToEarth: 4351400000);

$planets = [$mercury, $venus, $mars, $jupiter, $saturn, $uranus, $neptune];

foreach($planets as $planet){
    $distanceToPlanet = $planet->getDistanceToEarth();
    echo "<p>The distance to".$planet->getName()." is ".$distanceToPlanet." km</p>\n";
    $distanceInSteps = $ControllerGoingToPlanet->calcDistanceInSteps(planet: $planet);
    echo "<p>You need to walk ".$distanceInSteps." steps to reach ".$planet->getName()."</p>\n";
    $lifesToGo = $ControllerGoingToPlanet->timeToGo(distanceToPlanetSteps: $distanceInSteps);
    echo "<p>You need ".$lifesToGo." lifes to reach ".$planet->getName()."</p>\n";
    
}
