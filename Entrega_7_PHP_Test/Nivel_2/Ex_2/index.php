<?php

/*
Programa un DataProvider per a la classe Test de l’exercici 2 del nivell 1 i fes-lo servir. 
*/

use App\TDD;

include "../../../Entrega_7_PHP_Test/Nivel_1/Ex_2_TDD/src/TDD.php";

$notaPrimeraDivision = 60;
$notaSegundaDivision = 47;
$notaTerceraDivision = 38;
$notaSinDivision = 20;

$calcDivision = new TDD();

echo "Test calcDivision\n";
echo "Expected: Primera division\n";
echo $calcDivision ->calcDivision(nota: $notaPrimeraDivision) . "\n";
echo "Expected: Segunda division\n";
echo $calcDivision ->calcDivision(nota: $notaSegundaDivision) . "\n";
echo "Expected: Tercera division\n";
echo $calcDivision ->calcDivision(nota: $notaTerceraDivision) . "\n";
echo "Expected: Sin division\n";
echo $calcDivision ->calcDivision(nota: $notaSinDivision) . "\n";