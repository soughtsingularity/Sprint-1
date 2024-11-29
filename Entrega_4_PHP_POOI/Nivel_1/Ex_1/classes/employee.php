<?php

class Employee{

    private $nombre;
    private $sueldo;

    public function __construct($nombre, $sueldo){

        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function payTaxes(): string{
        echo "<p>$this->nombre</p>";

        return ($this->sueldo > 600) ? "Paga impuestos" : "No paga impuestos";
    }

}