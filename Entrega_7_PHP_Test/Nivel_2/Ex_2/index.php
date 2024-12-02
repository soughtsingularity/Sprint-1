<?php

use App\TDD;

include "classes/TDD.php";

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