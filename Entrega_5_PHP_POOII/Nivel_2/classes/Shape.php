<?php

abstract class Shape
{

    protected float|int $width;
    protected float|int $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(): float|int
    {
        return $this->width;
    }

    public function getHeight(): float|int
    {
        return $this->height;
    }

    abstract public function calculateArea(): float|int;
}