<?php

include_once 'Shape.php';

final class Triangle extends Shape{

    protected $height;
    protected $width;

    public function __construct(float|int $width, float|int $height) {

        $this->height = $height;
        $this->width = $width;
        
    }


    public function calculateArea(): float|int{
        return (($this->width * $this->height) / 2);
    }
}