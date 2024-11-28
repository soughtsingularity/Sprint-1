<?php

abstract class Animal{
    private $nombre;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    abstract function makeSound();
} 

class Dog extends Animal{

    private $nombre;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    function makeSound(): string{

        return "<p>Soy un perro, me llamo ". $this->getNombre()." y ladro: Guau, guau</p>";

    }
}

class Cat extends Animal{

    private $nombre;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    function makeSound(): string{

        return "<p>Soy un gato, me llamo ".$this->getNombre()." y maúllo: Miau, miau</p>";
    }
}

$gato1 = new Cat("Risk");
$perro1 = new Dog("York");

echo $gato1->makeSound();
echo $perro1->makeSound();




?>