<?php

use App\NumberChecker;

/* Ejercicio 1
Programa un DataProvider per a la classe Test de l’exercici 1 del nivell anterior i fes-lo servir.
*/



//include "../../../Entrega_7_PHP_Test/Nivel_1/Ex_1_NumberChecker/src/NumberChecker.php";
include "classes/NumberChecker.php";

$evenNumber = new NumberChecker(number: 3);
$oddNumber = new NumberChecker(number: 27);
$positiveNumber = new NumberChecker(number: 4);
$negativeNumber = new NumberChecker(number: 5);

echo "Test isEvenOddNumber\n";
echo "Expected: Fail\n";
echo "Result:";
echo $evenNumber -> isEven() ? "Pass\n" : "Fail\n";

echo "Test isEvenOddNumber\n";
echo "Expected: Fail\n";
echo "Result:";
echo $oddNumber -> isEven() ? "Pass\n" : "Fail\n";

echo "Test isPositiveNegative\n";
echo "Expected: Pass\n";
echo "Result:";
echo $positiveNumber -> isPositive() ? "Pass\n" : "Fail\n";

echo "Test isPositiveNegative\n ";
echo "Expected: Pass\n";
echo "Result:";
echo $negativeNumber -> isPositive() ? "Pass\n" : "Fail\n";





