<?php

require 'classes/PokerDice.php';

$dice = new PokerDice;
$dice1 = new PokerDice;
$dice2 = new PokerDice;
$dice3 = new PokerDice;
$dice4 = new PokerDice;
$dice5 = new PokerDice;


function throwDices(...$dices): array{

    $result = [];

    foreach($dices as $dice){
        $throw = $dice->throw();
        $shape = $dice->shapeName($throw);
        $result [] = $shape;
    }

    return $result;
}

$result = throwDices($dice1, $dice2, $dice3, $dice4, $dice5);
print_r( value: $result);