<?php

$intArray = [3,4,5,6,7];

$newArray = array_map(callback: function($number): float|int{
    return $number ** 3;
}, array: $intArray);

print_r(value: $newArray);


$stringArray = ["Carlos", "Maria", "Jose", "Eduardo"];

$evenNames = array_filter(array: $stringArray, callback: function($name): bool{
    return strlen(string: $name) % 2 == 0;
});

print_r(value: $evenNames);

$intArray = [1,2,3];

$primeSum = array_reduce(array: $intArray, callback: function($count,$number): int{

    if($number <=1){
        return $count;
    }

    for($i = 2; $i <= sqrt(num: $number); $i++){
        if($number % $i === 0){
            return $count;
        }
    }

    return $count + $number;

},initial: 0);

echo "La suma de todos los numeros es:".$primeSum."\n";

