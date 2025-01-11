<?php

namespace App;

class TDD
{
    public function calcDivision(float $nota): string
    {

        if ($nota >= 60) {
            $grado = "Primera division";
        } elseif ($nota >= 45) {
            $grado = "Segunda division";
        } elseif ($nota >= 33) {
            $grado = "Tercera division";
        } else {
            $grado = "Sin division";
        }

        return $grado;
    }
}


