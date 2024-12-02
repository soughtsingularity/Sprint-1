<?php

 echo "<h1>Ejercicio 1</h1>\n";

 $array1 = [1,2.4,3,4,5.6,7];
 $array2 = [3,7.4,4,6,8.6,9];

 print_r(array_intersect($array1, $array2));

$array4 = array_merge($array1, $array2);
print_r(value: $array4);

echo "\n";

echo "<h1>Ejercicio 2</h1>\n";

$alumno1 = [4,5,5,7, 3];

$alumno2 = [5,3,8,5,7];

$alumno3 = [ 7, 8, 7, 5, 9];

$alumnos = [$alumno1, $alumno2, $alumno3];

function showAverage($alumnos): string{

    $average = calcAverage($alumnos);

    return "La media de la clase es: ". number_format(num: $average,decimals: 2)."\n";
}
    
function calcAverage($arrays): string{

    $totalSum = 0;
    $average = 0;
    $totalCounter = 0;
    
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
        echo "La media total del alumno ".($index +1)." es: ". number_format(num: $average, decimals: 2)."\n";
    }

    $average = $totalSum/$totalCounter;

    return $average;

}

$result = showAverage(alumnos: $alumnos);
echo $result;


