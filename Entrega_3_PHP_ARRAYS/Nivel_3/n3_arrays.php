<?php

$intArray = [3, 4, 5, 6, 7];

$newArray = array_map(callback: function ($number): float|int {
    return $number ** 3;
}, array: $intArray);

print_r($newArray);

$stringArray = ["Carlos", "Maria", "Jose", "Eduardo"];

$evenNames = array_filter(array: $stringArray, callback: function ($name): bool {
    return strlen($name) % 2 == 0;
});

print_r($evenNames);

$intArray = [1, 2, 3];

$primeSum = array_reduce($intArray, function ($count, $number): int {
    if ($number <= 1) {
        return $count;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return $count;
        }
    }

    return $count + $number;
}, 0);

echo "La suma de todos los numeros es: " . $primeSum . "\n";
