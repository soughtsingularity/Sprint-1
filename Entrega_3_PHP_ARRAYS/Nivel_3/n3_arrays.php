<?php

/* Ejercicio 1
    Donat un array d’enters, fes un programa que:

    Retorni cada valor de l’array elevat al cub fent servir la funció array_map(). 
*/

$intArray = [3,4,5,6,7];

$newArray = array_map(callback: function($number): float|int{
    return $number ** 3;
}, array: $intArray);

print_r(value: $newArray);


/* Ejercicio 2
    Donat un array d’strings, fes un programa que:

    Retorni un array on només estiguin els strings que tinguin un nom parell de caràcters usant la funció array_filter().
*/

$stringArray = ["Carlos", "Maria", "Jose", "Eduardo"];

$evenNames = array_filter(array: $stringArray, callback: function($name): bool{
    return strlen(string: $name) % 2 == 0;
});

print_r($evenNames);

/* Ejercicio 3
    Donat un array d’enters, fes un programa que ens retorni la suma dels enters de l’array que siguin primers fent servir la funció array_reduce().
*/ 

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

