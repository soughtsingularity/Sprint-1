<?php

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


