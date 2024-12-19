<?php

use PHPUnit\Framework\TestCase;
use App\NumberChecker;

class NumberCHeckerTest extends TestCase
{

    /** 
     * @dataProvider numbers
    */

    public function testIsEvenOddNumber($numbers): void
    {
        $numberChecker = new NumberChecker($numbers);
        $this->assertFalse($numberChecker->isEven());
    }

    /** 
     * @dataProvider numbers
    */

    public function testIsEvenEvenNumber($numbers): void
    {
        $numberchecker = new NumberChecker($numbers);
        $this->assertTrue($numberchecker->isEven());
    }

    /** 
     * @dataProvider numbers
    */

    public function testIsPositiveNegativeNumber($numbers): void
    {
        $numberchecker = new NumberChecker($numbers);
        $this->assertFalse($numberchecker->isPositive());
    }

    /** 
     * @dataProvider numbers
    */

    public function testIsPositivePositiveNumber($numbers): void
    {
        $numberchecker = new NumberChecker($numbers);
        $this->assertTrue($numberchecker->isPositive());
    }

    public static function numbers()
    {

        return [
            [1],
            [2],
            [123],
            [400],
            [345],
            [45],
            [2],
        ];
    }
}