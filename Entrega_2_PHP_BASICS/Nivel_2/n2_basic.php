<?php

echo "<h1>Ejercicio 1</h1>\n";

define('TIEMPO_BASE', 3);
define('PRECIO_BASE', 10);
function payForCall(int|float $duration): string {

    $diferencia = $duration - TIEMPO_BASE;

    return ($duration <= 3) ? "La llamada cuesta 10 centimos" : "La llamada cuesta " . (PRECIO_BASE + ($diferencia * 5)) . " centimos";
}

echo payForCall(4);
echo "\n";

echo "<h1>Ejercicio 2</h1>\n";

$chocolat = 0;
$candy = 0;
$bubbleGum = 0;

function costChocolat($chocolat): float {
    $totalChocolat = $chocolat * 1;

    echo "<p>" . $chocolat . " chocolates x 1 euro = " . $totalChocolat . " euros</p>\n";

    return $totalChocolat;
}

function costCandy($candy): float {
    $totalCandy = $candy * 1.5;

    echo "<p>" . $candy . " caramelos x 1.5 euros = " . $totalCandy . " euros</p>\n";

    return $totalCandy;
}

function costBubbleGum($bubbleGum): float {
    $totalBubbleGum = $bubbleGum * 0.5;

    echo "<p>" . $bubbleGum . " chicles x 1 euro = " . $totalBubbleGum . " euros</p>\n";

    return $totalBubbleGum;
}

function calcTotalCost($chocolat = 0, $candy = 0, $bubblegum = 0): string {
    $total = $chocolat + $candy + $bubblegum;

    return "<h1>El coste total es de: " . $total . " euros.</h1>\n";
}

echo calcTotalCost(costChocolat(2), costCandy(3));
echo calcTotalCost(costChocolat(2), costCandy(2), costBubbleGum(2));


