<?php

abstract class Animal
{
    private $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    abstract public function makeSound();
}
