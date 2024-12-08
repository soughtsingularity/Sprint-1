<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>
</head>
<body>

    <?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $array = [];

    for ($i = 1; $i <= 5; $i++) {
        array_push($array, $i);
    }

    for ($i = 0; $i < count($array); $i++) {
        echo "<p>$array[$i]</p>";
    }

    $X = [10, 20, 30, 40, 50, 60];

    $longitud_array = count($X);

    echo "<p>La longitud del array es de " . $longitud_array . "</p>";

    unset($X[0]);

    $X = array_values($X);

    $longitud_array = count($X);

    echo "<p>La longitud del array es de " . $longitud_array . "</p>";

    function caracterPalabra($array, $caracter): bool 
    {
        $isCaracter = true;
        $caracter = strtolower($caracter);

        foreach ($array as $palabra) {
            if (strpos(strtolower($palabra), $caracter) === false) {
                $isCaracter = false;
            }
        }

        return $isCaracter;
    }

    $array = ["Hola", "Aloha", "Ola"];
    $caracter = 'o';

    echo caracterPalabra($array, $caracter);

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