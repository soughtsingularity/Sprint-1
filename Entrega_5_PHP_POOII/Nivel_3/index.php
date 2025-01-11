<?php 

include_once 'classes/Cercle.php';
include_once 'classes/Rectangle.php';
include_once 'classes/Triangle.php';

$rectangle = new Rectangle(width: 3, height: 4);
$triangle = new Triangle(width: 3, height: 4);
$cercle = new Cercle(radius: 4);

$areaRec = $rectangle->calculateArea();
$areaTri = $triangle->calculateArea();
$areaCerc = $cercle->calculateArea();

echo "El area del rectángulo es de: " . $areaRec . "cm2" . PHP_EOL;
echo "El area del triángulo es de: " . $areaTri . "cm2" . PHP_EOL;
echo "El area del círculo es de: " . $areaCerc . "cm2" . PHP_EOL;
