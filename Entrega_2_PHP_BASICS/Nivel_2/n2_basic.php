<?php

/* Exercice 1
    Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

    Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
    Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.
*/

echo "<h1>Ejercicio 1</h1>\n";

function payForCall($duration): string{

    $counter = 0;

    if($duration <= 3){

        return "El coste total de la llamada es de 10 céntimos";

    }else{
        for($i=3; $i < $duration; $i++){
            $counter ++;
        }

        $cost = 10 + $counter;

        
    }

    return "<p>El coste total de la llamada es de ".$cost. " céntimos</p>\n";

}

echo payForCall(duration: 13);
echo "\n";


/*
    Imagina que som a una botiga on es ven:

    Xocolata: 1 euro
    Xiclets: 0,50 euros
    Caramels: 1,50 euros

    Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:

    2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:

    funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

    Sent, per tant, el total, 4. 
*/

echo "<h1>Ejercicio 2</h1>\n";

$chocolat = 0;
$candy = 0;
$bubbleGum = 0;


function costChocolat($chocolat): float{
    $totalChocolat = $chocolat * 1;

    echo "<p>".$chocolat. " chocolates x 1 euro =  ". $totalChocolat. " euros</p>\n";

    return $totalChocolat;

}

function costCandy($candy): float{
    $totalCandy = $candy * 1.5;

    echo "<p>".$candy. " caramelos x 1.5 euros =  ". $totalCandy. " euros</p>\n";

    return $totalCandy;

}

function costBubbleGum($bubbleGum): float{
    $totalBubbleGum = $bubbleGum * 0.5;

    echo "<p>".$bubbleGum. " chicles x 1 euro = ". $totalBubbleGum. " euros</p>\n";

    return $totalBubbleGum;
}


function calcTotalCost($chocolat = 0, $candy = 0, $bubblegum = 0): string{

    $total = $chocolat + $candy + $bubblegum;

    return "<h1>El coste total es de: ". $total." euros.</h1>\n";
}

echo calcTotalCost(chocolat: costChocolat(chocolat: 2), candy: costCandy(candy: 3));
echo calcTotalCost(chocolat: costChocolat(chocolat: 2), candy: costCandy(candy: 2), bubblegum: costBubbleGum(bubbleGum: 2));


