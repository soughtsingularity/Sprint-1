<?php

ini_set(option: 'display_errors', value: 1);
ini_set(option: 'display_startup_errors', value: 1);
error_reporting(E_ALL);

include_once "classes/Triangle.php";
include_once "classes/Rectangle.php";

/*
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt.
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament
l'àrea de la forma area().
*/

$triangle1 = new Triangle(width: 3, height: 4);
$rectangle1 = new Rectangle(width: 4, height: 3);

echo "El area del triangulo es de:\n";
echo $triangle1->calculateArea() . " cm2\n";

echo "El area del rectángulo es de:\n";
echo $rectangle1->calculateArea() . " cm2\n";
