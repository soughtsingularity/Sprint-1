<?php

require 'vendor/autoload.php';

use Brick\Math\BigDecimal;

class Planet
{

    private $name;
    private $distanceToEarth;

    public function __construct($name, $distanceToEarth)
    {
        $this->name = $name;
        $this->distanceToEarth = BigDecimal::of(value: $distanceToEarth);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDistanceToEarth(): BigDecimal
    {
        return $this->distanceToEarth;
    }
}

