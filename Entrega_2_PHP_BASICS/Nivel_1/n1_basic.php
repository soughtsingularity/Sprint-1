<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Básics</title>
</head>
<body>
    <?php
    echo "<h1>Ex 1 </h1>";

    $numero = 4;
    $double = 4.4532;
    $string = "Soy un string";
    $boolean = false;

    define("NOM", "Ramón Martos OLiver");

    echo "<h1>" . NOM . "</h1>";

    echo "<h1>Ex 2 </h1>";

    $saludo = "Hello World";

    echo "<h1>" . $saludo . "</h1>";

    echo "<h2>" . strtoupper($saludo) . "</h2>";

    echo "<h2>" . strlen($saludo) . "</h2>";

    echo "<h2>" . strrev($saludo) . "</h2>";

    $string2 = " Aquest es el curs de PHP";

    echo "<h2>" . $saludo . $string2 . "</h2>";

    echo "<h1>Ex 3 </h1>";
    echo "<h2>a)</h2>";

    $x = 3;
    $y = 4;
    $n = 2.24;
    $m = 4.45;

    echo "Valor de las variables x e y:";

    echo "<p>x: " . $x . "</p>";
    echo "<p>y: " . $y . "</p>";

    echo "Suma de las variables x e y: <p>" . ($x + $y) . "</p>";
    echo "Resta de las variables x e y: <p>" . ($x - $y) . "</p>";
    echo "Producto de las variables x e y: <p>" . ($x * $y) . "</p>";
    echo "Módulo de las variables x e y: <p>" . ($x % $y) . "</p>";

    echo "Valor de las variables n y p:";

    echo "<p>n: " . $n . "</p>";
    echo "<p>m: " . $m . "</p>";

    echo "Suma de las variables x e y: <p>" . ($n + $m) . "</p>";
    echo "Resta de las variables x e y: <p>" . ($n - $m) . "</p>";
    echo "Producto de las variables x e y: <p>" . ($n * $m) . "</p>";
    echo "Módulo de las variables x e y: <p>" . ($n % $m) . "</p>";

    echo "Cuadrado de la variable x: <p>" . ($x ** 2) . "</p>";
    echo "Cuadrado de la variable y: <p>" . ($y ** 2) . "</p>";
    echo "Cuadrado de la variable n: <p>" . ($n ** 2) . "</p>";
    echo "Cuadrado de la variable m: <p>" . ($m ** 2) . "</p>";

    echo "Suma de todas las variables: x+y+n+m <p>" . ($x + $y + $n + $m) . "</p>";
    echo "Producto de todas las variables: x+y+n+m <p>" . ($x * $y * $n * $m) . "</p>";

    echo "<h2>b)</h2>";

    function calcular(float $num1, float $num2, string $operator): string
    {
        switch ($operator) {
            case "+":
                $resultado = $num1 + $num2;
                break;
            case "-":
                $resultado = $num1 - $num2;
                break;
            case "/":
                if ($num2 == 0) {
                    $resultado = "No se puede dividir por 0";
                } else {
                    $resultado = $num1 / $num2;
                }
                break;
            case "*":
                $resultado = $num1 * $num2;
                break;
            default:
                $resultado = "Opcion incorrecta";
        }

        return "<h2>" . $resultado . "</h2>";
    }

    echo "<h1>Ex 4 </h1>";

    function contador(int $numero = 10, int $paso = 1): string
    {
        echo "Contando hasta " . $numero . " en itervalos de " . $paso;
        echo "<br>";
        $resultado = "";
        for ($i = $paso; $i <= $numero; $i += $paso) {
            $resultado .= "$i ";
        }
        return $resultado;
    }

    echo "<h1>Ex 5 </h1>";

    function gradoEstudiante(float $nota): string
    {
        if ($nota >= 60) {
            $grado = "Primera division";
        } else if ($nota >= 45) {
            $grado = "Segunda división";
        } else if ($nota >= 33) {
            $grado = "Tercera división";
        } else {
            $grado = "No obtenido. El estudiante reprobará";
        }

        return $grado;
    }

    echo "<h1>Ex 6 </h1>";

    function isBitten(): string {
        return rand(0, 1) ? "Charlie no te ha mordido" : "Charlie te ha moridido";
    }

    echo isBitten();

    ?>
</body>
</html>