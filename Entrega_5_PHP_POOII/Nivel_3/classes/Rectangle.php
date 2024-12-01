<?php

include_once 'Shape.php';


final class Rectangle extends Shape{

    public function __construct(float|int $width, float|int $height) {
        parent::__construct($width, $height);
    }

    public function calculateArea(): float|int{
        return ($this->width * $this->height);
    }
}