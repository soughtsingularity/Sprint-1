<?php

/* Exeercici 3
   Seguint l’exercici anterior, imagina com ampliaries l’estructura que has creat per representar un Cercle i el seu corresponent càlcul d’àrea.
*/
include_once 'classes/Cercle.php';

$cercle = new Cercle(radius: 3);

echo "El area del circulo es de:\n";

echo $cercle->calculateArea() . " cm2 \n";
