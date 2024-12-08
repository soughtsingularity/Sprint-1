<?php
function listNums($number): array
{
    $numbers = [];

    for ($i = 2; $i <= $number; $i++) {
        array_push($numbers, $i);
    }

    return $numbers;
}

function findPrime($number): array
{
    $numbers = listNums($number);
    $index = 0;

    while ($numbers[$index] ** 2 <= $number) {
        $isPrime = $numbers[$index];

        foreach ($numbers as $key => $value) {
            if ($value % $isPrime == 0 && $value != $isPrime) {
                unset($numbers[$key]);
            }
        }

        $numbers = array_values($numbers);
        $index++;
    }

    return $numbers;
}

print_r(findPrime(20));
