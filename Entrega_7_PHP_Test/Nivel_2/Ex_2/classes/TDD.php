<?php

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


