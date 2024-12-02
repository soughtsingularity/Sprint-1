<?php

use App\NumberChecker;

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





