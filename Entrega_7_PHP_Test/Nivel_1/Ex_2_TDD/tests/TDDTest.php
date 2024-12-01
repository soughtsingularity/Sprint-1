<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\TDD;

/* Exercici 5
    Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

    Condicions:

    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
    Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
    Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
    Si la nota és menor a 33%, l'estudiant reprovarà.
*/ 



class TDDTest extends TestCase{

    public function testFirstDivision(): void{

        $calc = new TDD();

        $grade = $calc->calcDivision(nota: 68);

        $this->assertEquals("Primera division", $grade);
    }

    public function testSecondDivision(): void{

        $calc = new TDD();

        $grade = $calc->calcDivision(nota: 55);

        $this->assertEquals("Segunda division", $grade);
    }

    public function testThirdDivision(): void{

        $calc = new TDD();

        $grade = $calc->calcDivision(nota: 39);

        $this->assertEquals("Tercera division", $grade);
    }

    public function testNoDivision(): void{

        $calc = new TDD();

        $grade = $calc->calcDivision(nota: 18);

        $this->assertEquals("Sin division", $grade);
    }
}

