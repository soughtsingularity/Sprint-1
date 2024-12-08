<?php

require 'vendor/autoload.php';

use Brick\Math\BigDecimal;
use Brick\Math\RoundingMode;

include_once 'classes/Planet.php';

class ControllerGoingToPlanet
{

    public function calcDistanceInSteps($planet): BigDecimal
    {

        $oneKmToCm = BigDecimal::of(value: '100000');
    
        $oneKmToSteps = BigDecimal::of(value: $oneKmToCm)->dividedBy(that: 40);
    
        $distanceToPlanet = BigDecimal::of(value: $planet->getDistanceToEarth());
    
        $distanceToPlanetInSteps = BigDecimal::of(value: $distanceToPlanet->multipliedBy(that: $oneKmToSteps));

        return $distanceToPlanetInSteps;
    }

    public function timeToGo($distanceToPlanetSteps): BigDecimal
    {

        $stepsInOneLife = BigDecimal::of('5000')->multipliedBy('365')->multipliedBy('80');

        $stepsToPlanet = $distanceToPlanetSteps ->dividedBy($stepsInOneLife, 2, RoundingMode::HALF_UP);

        return $stepsToPlanet;

    }

}

