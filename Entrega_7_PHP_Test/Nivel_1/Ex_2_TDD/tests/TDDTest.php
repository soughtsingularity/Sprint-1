<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\TDD;

class TDDTest extends TestCase
{

    /**
     * @dataProvider notas
     */

    public function testFirstDivision($notas): void
    {

        $calc = new TDD();

        $grade = $calc->calcDivision($notas);

        $this->assertEquals("Primera division", $grade);
    }

    /**
     * @dataProvider notas
     */

    public function testSecondDivision($notas): void
    {

        $calc = new TDD();

        $grade = $calc->calcDivision($notas);

        $this->assertEquals("Segunda division", $grade);
    }

    /**
     * @dataProvider notas
     */

    public function testThirdDivision($notas): void
    {

        $calc = new TDD();

        $grade = $calc->calcDivision($notas);

        $this->assertEquals("Tercera division", $grade);
    }

    /**
     * @dataProvider notas
     */

    public function testNoDivision($notas): void
    {

        $calc = new TDD();

        $grade = $calc->calcDivision($notas);

        $this->assertEquals("Sin division", $grade);
    }

    public function notas()
    {

        return [

            [12],
            [23],
            [34],
            [45],
            [55],
            [69],
            [78],
            [85],
            [98],
        ];
    }
}

