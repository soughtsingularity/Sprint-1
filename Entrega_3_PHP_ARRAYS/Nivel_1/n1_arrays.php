<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>
</head>
<body>

    <?php

    // Ejercicio 1
    // Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.

    $array = [];

    for($i = 1; $i <=5; $i++ ){
        array_push(array: $array, values: $i);
    }

    for($i = 0; $i < count(value: $array); $i++){
        echo "<p>$array[$i]</p>";
    }

    /* Ejercicio 2
    $X = array (10, 20, 30, 40, 50,60);
    Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. 
    Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). 
    Mostra per última vegada la mida de l’array.*/ 

    $X = array (10, 20, 30, 40, 50,60);

    $longitud_array = count(value: $X);

    echo "<p>La longitud del array es de ". $longitud_array."</p>";

    unset($X[0]);

    $X = array_values(array: $X);

    $longitud_array = count(value: $X);

    echo "<p>La longitud del array es de ". $longitud_array."</p>";

    /* Exercici 3
    Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de 
    l’array tenen el caràcter passat com a segon paràmetre.

    Per exemple:
    Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.
    */

    function caracterPalabra($array, $caracter): bool{

        $isCaracter = true;
        $caracter = strtolower(string: $caracter);

        foreach($array as $palabra){

            if(strpos(strtolower(string: $palabra), $caracter) === false){
                $isCaracter = false;
            }
        }

        return $isCaracter;
    }

    $array = ["Hola", "Aloha", "Ola"];
    $caracter = 'o';

    echo caracterPalabra(array: $array, caracter: $caracter);



    /*
    Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:

    nom
    edat
    email
    menjar favorit
    */

    $yo = [
        "nombre" => "Ramon",
        "Edad" => 33,
        "Email" => "ramonoliver@gmail.com",
        "Comida favorita" => "Hamburguesa"
    ];

    echo "<p>" . $yo["nombre"] . "</p>";

?>
    
</body>
</html>