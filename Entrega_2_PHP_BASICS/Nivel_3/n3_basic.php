<?php

/*
El sedàs d'Eratòstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. 
Basant-te en la informació de l'enllaç adjunt, implementa el sedàs d'Eratòstenes dins d'una funció, 
de tal forma que puguem invocar la funció per a un número concret. 


// Primer paso: listar los números naturales comprendidos entre 2 hasta el número que se desee, en este caso, hasta el 20.

$number = 20;

function listNums($number): array{

    $numbers = [];

    for($i = 2; $i <=$number; $i++){

        array_push($numbers,$i);

    }

    return $numbers;

}

// print_r(value: createArray(number: 20));

// Segundo paso: se toma el primer número no rayado ni marcado, como número primo.

$numbers = listNums($number);

$isPrime = $numbers[0];

// Tercer paso: se tachan todos los múltiplos del número que se acaba de indicar como primo.


for($i = 0; $i < count($numbers); $i++){
    if($numbers[$i] % $isPrime == 0 && $numbers[$i] != $isPrime){
        unset($numbers[$i]);
    }

    $numbers = array_values($numbers);

}

// 4. Cuarto paso: si el cuadrado del primer número que no ha sido rayado ni marcado es inferior a 20, 
// entonces se repite el segundo paso. Si no, el algoritmo termina, y todos los enteros no tachados son declarados primos.

if($numbers[0]**2 > $number){
    listNums($numbers[0]);
}else{
    print_r($numbers);

}

*/

// Haciendolo funcionar

function listNums($number): array{

    $numbers = [];

    for($i = 2; $i <=$number; $i++){

        array_push(array: $numbers,values: $i);

    }

    return $numbers;

}

function findPrime($number): array{

    $numbers = listNums(number: $number);
    $index = 0;

    while($numbers[$index]**2 <= $number){

        $isPrime = $numbers[$index];

        foreach($numbers as $key => $value){
            if($value % $isPrime == 0 && $value != $isPrime){
                unset($numbers[$key]);
            }
        }

        $numbers = array_values(array: $numbers);
        $index++;
    }

    return $numbers;
}

print_r(value: findPrime(number: 20));
