<?php

include_once 'Shape.php';

final class Triangle extends Shape{

    public function calculateArea(): float|int{
        return (($this->getWidth() * $this->getHeight()) / 2);
    }
}