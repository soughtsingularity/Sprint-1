<?php

require 'vendor/autoload.php';

use Brick\Math\BigDecimal;

include_once 'classes/Planet.php';

class ControllerDistance{

    public function calcDistance($planet): BigDecimal {

        $oneKmToCm = BigDecimal::of(value: '100000');
    
        $oneKmToSteps = BigDecimal::of(value: $oneKmToCm)->dividedBy(that: 40);
    
        $distanceToPlanet = BigDecimal::of(value: $planet->getDistanceToEarth());
    
        $distanceToPlanetInSteps = BigDecimal::of(value: $distanceToPlanet->multipliedBy(that: $oneKmToSteps));

        return $distanceToPlanetInSteps;
    }

}

