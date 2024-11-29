<?php

/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
*/

require 'classes/rectangle.php';
require 'classes/triangle.php';

$triangulo1 = new Triangulo(ancho: 10, alto: 3);
$rectangulo1 = new Rectangulo( ancho: 10, alto: 3);

echo "<p> El area del triangulo es ".$triangulo1->calculateArea()."</p>";
echo "<p> El area del rectangulo es ".$rectangulo1->calculateArea()."</p>";

?>