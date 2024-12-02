<?php

/* Exercici 5
    Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

    Condicions:

    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
    Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
    Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
    Si la nota és menor a 33%, l'estudiant reprovarà.
*/ 

namespace App;

class TDD{
    function calcDivision(float $nota): string{

        if($nota >= 60){
            $grado = "Primera division";
        }else if($nota >=45){
            $grado = "Segunda division";
        }else if($nota >= 33){
            $grado = "Tercera division";
        }else{
            $grado = "Sin division";
        }

        return $grado;
    }
}


