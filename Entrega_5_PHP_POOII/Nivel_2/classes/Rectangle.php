<?php

include_once 'Shape.php';


final class Rectangle extends Shape{

    public function calculateArea(): float|int{
        return ($this->getWidth() * $this->getHeight());
    }
}