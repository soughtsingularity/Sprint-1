<?php
class PokerDice
{

    private static $totalRolls = 0;
    private $theRoll;

    private $shapes = [
        1 => "As", 
        2 => "K", 
        3 => "Q", 
        4 => "J", 
        5 => "7", 
        6 => "8"];
    public function roll(): void
    {
        $this->theRoll = rand(min: 1, max: 6);
    }

    public function getShapes(): array
    {
        return $this->shapes;
    }

    public function shapeName(): string
    {

        return $this->shapes[$this->theRoll];
    }

    public static function incrementTotalRolls(): void
    {
        self::$totalRolls++;
    }

    public static function getTotalRolls(): int
    {
        return self::$totalRolls;
    }
}