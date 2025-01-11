<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "classes/Triangle.php";
include_once "classes/Rectangle.php";

$triangle1 = new Triangle(width: 3, height: 4);
$rectangle1 = new Rectangle(width: 4, height: 3);

echo "El area del triangulo es de:\n";
echo $triangle1->calculateArea() . " cm2\n";

echo "El area del rectángulo es de:\n";
echo $rectangle1->calculateArea() . " cm2\n";
