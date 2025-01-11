<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\TDD;

class TDDTest extends TestCase
{

    /**
     * @dataProvider gradeProvider
    */

    public function testGrade($grade, $expectedMessage){
        $calcGrade = new TDD();
        $this->assertEquals($expectedMessage, $calcGrade->calcDIvision($grade));

    }

    public static function gradeProvider()
    {

        return [

            [12, "Sin division"],
            [23, "Sin division"],
            [34, "Tercera division"],
            [45, "Segunda division"],
            [55, "Segunda division"],
            [69, "Primera division"],
            [78, "Primera division"],
            [85, "Primera division"],
            [98, "Primera division"],
        ];
    }
}

