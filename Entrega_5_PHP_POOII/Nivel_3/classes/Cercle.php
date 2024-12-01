<?php

include_once 'Shape.php';

final class Cercle extends Shape{

    public function __construct(float|int $radius){
        parent::__construct(dimension1: $radius);

    }

    public function calculateArea(): float|int
    {
        return parent::PI*($this->radius ** 2);
    }
}