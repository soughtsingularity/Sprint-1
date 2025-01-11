<?php

require 'classes/rectangle.php';
require 'classes/triangle.php';

$triangulo1 = new Triangulo(ancho: 10, alto: 3);
$rectangulo1 = new Rectangulo(ancho: 10, alto: 3);

echo "<p> El area del triangulo es " . $triangulo1->calculateArea() . "</p>";
echo "<p> El area del rectangulo es " . $rectangulo1->calculateArea() . "</p>";

?>