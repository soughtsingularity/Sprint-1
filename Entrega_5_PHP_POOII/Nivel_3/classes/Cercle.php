<?php

include_once 'Shape.php';

final class Cercle extends Shape{

    protected $radius;

    public function __construct(float|int $radius){
        $this->radius = $radius;

    }

    public function calculateArea(): float|int
    {
        return self::PI*($this->radius ** 2);
    }
}