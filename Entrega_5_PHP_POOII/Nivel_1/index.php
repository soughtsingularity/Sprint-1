<?php

require 'classes/cat.php';
require 'classes/dog.php';

$gato1 = new Cat(nombre: "Risk");
$perro1 = new Dog(nombre: "York");

echo $gato1->makeSound();
echo $perro1->makeSound();

?>