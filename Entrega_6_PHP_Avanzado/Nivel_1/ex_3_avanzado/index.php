<?php

require 'classes/luchador.php';

$luchador1 = new Luchador(name: 'Odor', level: 30, origin: "Earth", mana: 40);
$luchador1->setWeapon(weapon: "Gun");
$luchador2 = new Luchador(name: 'Loki', level: 55, origin: "Mars", mana: 15);

echo "<p>Registrando luchadores...</p>";

try{
    echo "<p>Registrando a ".$luchador1->getName()."</p>";
    $inscripcion = serialize(value: $luchador1);
    unserialize(data: $inscripcion) ;
    echo "<p>Registrando a ".$luchador2->getName()."</p>";
    $inscripcion = serialize(value: $luchador2);
    unserialize(data: $inscripcion) ;

} catch(InvalidArgumentException $e){
    echo $e->getMessage();
}

echo "<p>".$luchador2->getName()." va a obtener un arma...</p>";

$luchador2->setWeapon(weapon: "Knife");

try{
    echo "<p>Registrando a ".$luchador2->getName()."</p>";
    $inscripcion = serialize(value: $luchador2);
    unserialize(data: $inscripcion);
}catch(InvalidArgumentException $e){
    echo $e->getMessage();
}




?>