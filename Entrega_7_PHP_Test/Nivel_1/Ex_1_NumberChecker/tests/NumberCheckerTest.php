<?php

use PHPUnit\Framework\TestCase;
use App\NumberChecker;

class NumberCHeckerTest extends TestCase{

    public function testIsEvenOddNumber(): void{
        $numberChecker = new NumberChecker(number: 7);
        $this->assertFalse($numberChecker->isEven());
    }

    public function testIsEvenEvenNumber(): void{
        $numberchecker = new NumberChecker(number: 2);
        $this->assertTrue($numberchecker->isEven());
    }

    public function testIsPositiveNegativeNumber(): void{
        $numberchecker = new NumberChecker(number: -3);
        $this->assertFalse($numberchecker->isPositive());
    }

    public function testIsPositivePositiveNumber(): void{
        $numberchecker = new NumberChecker(number: (5));
        $this->assertTrue($numberchecker->isPositive());
    }
}