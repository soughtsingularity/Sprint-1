<?php

/* Ejercicio 1
    Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:

    La intersecció dels dos arrays (nombres en comú)
    La mescla dels dos arrays.
 */

 echo "<h1>Ejercicio 1</h1>\n";

 $array1 = [1,2.4,3,4,5.6,7];
 $array2 = [3,7.4,4,6,8.6,9];

 print_r(value: array_intersect(array: $array1, arrays: $array2)) ;

//$array3 = array_intersect($array1,$array2);
//print_r(value: $array3);

$array4 = array_merge($array1, $array2);
print_r(value: $array4);

echo "\n";

echo "<h1>Ejercicio 2</h1>\n";

/* Ejercicio 1
Crea un programa que llisti les notes dels/les alumnes d’una classe. 
Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada alumne, 
com la nota mitjana de la classe sencera.
*/

$alumno1 = [
    'nota1' => 4,
    'nota2' => 5,
    'nota3' => 5,
    'nota4' => 7,
    'nota5' => 3
];

$alumno2 = [
    'nota1' => 5,
    'nota2' => 3,
    'nota3' => 8,
    'nota4' => 5,
    'nota5' => 7
];

$alumno3 = [
    'nota1' => 7,
    'nota2' => 8,
    'nota3' => 7,
    'nota4' => 5,
    'nota5' => 9
];

function calcAverage(... $arrays): string{

    $totalSum = 0;
    $average = 0;
    $totalCounter = 0;
    $average = 0;
    $result = "";

    foreach($arrays as $index => $array){
        $particularSum = 0;
        $counter = 0;

        foreach($array as $key => $value){
            $particularSum += $value;
            $counter++;
        }
        $average = $particularSum/$counter;
        $totalCounter += $counter;
        $totalSum += $particularSum;
        $result .= "La media total del alumno ".($index +1)." es: ". number_format(num: $average, decimals: 2)."\n";
    }

    $average = $totalSum/$totalCounter;
    $result .= "La media de la clase es: ". number_format(num: $average,decimals: 2)."\n";

    return $result;

}

$result = calcAverage($alumno1, $alumno2, $alumno3);
echo $result;


