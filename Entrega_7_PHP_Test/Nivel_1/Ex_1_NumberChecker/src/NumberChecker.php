<?php
/*Donada la classe NumberChecker programa els tests unitaris que facin falta per certificar que el codi font de la classe fa el que ha de fer.*/

namespace App;

class NumberChecker
{
    public function __construct(private int $number) {}

    public function isEven(): bool
    {
        return $this->number % 2 == 0;
    }

    public function isPositive(): bool
    {
        return $this->number > 0;
    }
}