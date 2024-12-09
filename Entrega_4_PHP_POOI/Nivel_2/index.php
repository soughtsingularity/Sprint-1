<?php

require 'classes/PokerDice.php';

$dices = [];

for ($i = 0; $i < 5; $i++) {
    $dices[] = new PokerDice();
}

function rollDices($dices): array
{
    $result = [];

    foreach ($dices as $dice) {
        echo "Este es mi dado: " . $dice->getShapes() . PHP_EOL;
        $dice->roll();
        echo implode(",", $dice->getShapes()) . PHP_EOL;
        $result[] = $dice->shapeName();
    }

    PokerDice::incrementTotalRolls();

    return $result;
}

$result = rollDices($dices);

echo "Resultados de la tirada: " . implode(", ", $result) . PHP_EOL;
echo "Número total de tiradas: " . PokerDice::getTotalRolls() . PHP_EOL;
