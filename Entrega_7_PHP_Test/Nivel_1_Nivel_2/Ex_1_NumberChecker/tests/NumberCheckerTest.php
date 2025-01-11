<?php

use PHPUnit\Framework\TestCase;
use App\NumberChecker;

class NumberCheckerTest extends TestCase
{

    /**
     * @dataProvider evenOddProvider
     */

    public function testIsEven($number, $evenExpected){
        $numberChecker = new NumberChecker($number);
        $this->assertEquals($evenExpected, $numberChecker->isEven());
    }

    /**
     * @dataProvider positiveNegativeProvider
     */

    public function testIsPositive($number, $positiveExpected){
        $numberChecker = new NumberChecker($number);
        $this->assertEquals($positiveExpected, $numberChecker->isPositive());
    }

    public static function evenOddProvider(){

        return [
            [1, false],
            [2, true],
            [145, false],
            [400, true]
        ];
    }

    public static function positiveNegativeProvider(){

        return [
            [1, true],
            [-450, false],
            [35, true],
            [80, true]
        ];
    }


}