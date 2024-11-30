<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Básics</title>
</head>
<body>
    <?php


    /* Exercici 1
    Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
    Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.*/ 
    echo "<h1>Ex 1 </h1>";

    $numero = 4;
    $double = 4.4532;
    $string = "Soy un string";
    $boolean = false;

    define("NOM", value: "Ramón Martos OLiver");

    echo "<h1>".NOM."</h1>";


    /* Exercici 2
    Imprimeix per pantalla "Hello, World!" utilitzant una variable. En acabat:
    Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
    Imprimeix per pantalla la mida (longitud) de la variable.
    Imprimeix per pantalla l'string en ordre invers de caràcters.
    Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings.*/ 
    
    echo "<h1>Ex 2 </h1>";

    $saludo = "Hello World";

    echo "<h1>".$saludo."</h1>";

    echo "<h2>".strtoupper(string: $saludo)."</h2>";

    echo "<h2>" .strlen(string: $saludo). "</h2>";

    echo "<h2>" .strrev(string: $saludo). "</h2>";

    $string2 = " Aquest es el curs de PHP";

    echo "<h2>".$saludo.$string2."</h2>";


    /* Exercici 3
    a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. 
    A continuació, mostra per pantalla per a X i Y:

    El valor de cada variable.
    La suma.
    La resta.
    El producte.
    El mòdul.
    Per N i M realitzaràs el mateix.

    Per a totes les variables (X, Y, N, M):

    El doble de cada variable.
    La suma de totes les variables.
    El producte de totes les variables.
    
    b) Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, 
    la multiplicació o la divisió dels dos nombres. */
    
    echo "<h1>Ex 3 </h1>";
    echo "<h2>a)</h2>";

    $x = 3;
    $y = 4;
    $n = 2.24;
    $m = 4.45;

    echo "Valor de las variables x e y:";

    echo "<p>x: ".$x."</p>";
    echo "<p>y: ".$y."</p>";

    echo "Suma de las variables x e y: <p>".($x+$y)."</p>";
    echo "Resta de las variables x e y: <p>".($x-$y)."</p>";
    echo "Producto de las variables x e y: <p>".($x*$y)."</p>";
    echo "Módulo de las variables x e y: <p>".($x%$y)."</p>";

    echo "Valor de las variables n y p:";

    echo "<p>n: ".$n."</p>";
    echo "<p>m: ".$m."</p>";

    echo "Suma de las variables x e y: <p>".($n+$m)."</p>";
    echo "Resta de las variables x e y: <p>".($n-$m)."</p>";
    echo "Producto de las variables x e y: <p>".($n*$m)."</p>";
    echo "Módulo de las variables x e y: <p>".($n%$m)."</p>";

    echo "Cuadrado de la variable x: <p>".($x**2)."</p>";
    echo "Cuadrado de la variable y: <p>".($y**2)."</p>";
    echo "Cuadrado de la variable n: <p>".($n**2)."</p>";
    echo "Cuadrado de la variable m: <p>".($m**2)."</p>";

    echo "Suma de todas las variables: x+y+n+m <p>".($x+$y+$n+$m)."</p>";
    echo "Producto de todas las variables: x+y+n+m <p>".($x*$y*$n*$m)."</p>";

    echo "<h2>b)</h2>";

    function calcular(float $num1, float $num2, string $operator): String{

        switch($operator){
            case "+":
                $resultado = $num1 + $num2;
                break;

            case "-":
                $resultado = $num1 - $num2;
                break;

            case "/":
                if($num2 == 0){
                    $resultado = "No se puede dividir por 0";
                }else{
                    $resultado = $num1 / $num2;
                }
                break;

            case "*":
                $resultado = $num1*$num2;
                break;

            default:
                $resultado = "Opcion incorrecta";
        }

        return "<h2>".$resultado."</h2>";

    }

    // echo calcular(2,0,'/');
    // echo calcular(2,2,'*');
    // echo calcular(2,2,'+');
    // echo calcular(2,2,'-');


    /*- Exercici 4
    Fes un programa que implementi una funció on es compti fins a un nombre determinat. 
    Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. 
    A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). 
    El compte s’ha de mostrar per pantalla pas per pas.*/

    echo "<h1>Ex 4 </h1>";


    function contador(int $numero = 10, int $paso = 1): string{
        echo "Contando hasta ".$numero." en itervalos de ".$paso;
        echo "<br>";
        $resultado = "";
        for($i = $paso; $i <= $numero; $i += $paso){
                $resultado .=  "$i " ;
            

        }
        return $resultado;
    }

    // echo contador(10,paso: 3);

    /* Exercici 5
    Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

    Condicions:

    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
    Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
    Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
    Si la nota és menor a 33%, l'estudiant reprovarà.
*/ 
    echo "<h1>Ex 5 </h1>";


    function gradoEstudiante(float $nota): string{

        if($nota >= 60){
            $grado = "Primera division";
        }else if($nota >=45){
            $grado = "Segunda división";
        }else if($nota >= 33){
            $grado = "Tercera división";
        }else{
            $grado = "No obtenido. El estudiante reprobará";
        }

        return $grado;
    }

    //echo gradoEstudiante(50.5);

    /*Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.

    Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.*/

    echo "<h1>Ex 6 </h1>";

    function isBitten(): string{

        return rand(min: 0,max: 1) ? "Charlie no te ha mordido" : "Charlie te ha moridido";
    }

    echo isBitten();


    ?> 
    
</body>
</html>