<?php

require_once 'shape.php';
class Triangulo extends Shape
{
    public function calculateArea(): float
    {
        
        return ($this->ancho * $this->alto) / 2;
    }
}

?>

