<?php

include "ShapeForm.php";
abstract class Shape implements ShapeForm
{

    protected const PI = 3.14;

    abstract public function calculateArea(): float|int;
}