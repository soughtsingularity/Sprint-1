<?php

require_once 'animal.php';
class Dog extends Animal
{

    public function makeSound(): string
    {

        return "<p>Soy un perro, me llamo " . $this->getNombre() . " y ladro: Guau, guau</p>";

    }
}