<?php

abstract class Shape{

    protected float|int $width;

    protected float|int $heigth;

    protected float|int $radius;
    protected const PI = 3.14;

    public function __construct(float|int $dimension1, float|int $dimension2 = null) 
    {
        if ($dimension2 === null) {
            $this->radius = $dimension1;
        } else {
            $this->width = $dimension1;
            $this->height = $dimension2;
        }
    }

    abstract public function calculateArea(): float|int;
}