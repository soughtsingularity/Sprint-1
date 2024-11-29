<?php

require_once 'animal.php';
class Cat extends Animal{

    function makeSound(): string{

        return "<p>Soy un gato, me llamo ".$this->getNombre()." y maúllo: Miau, miau</p>";
    }
}