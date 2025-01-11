<?php

require_once 'shape.php';
class Rectangulo extends Shape
{

    public function calculateArea(): float|int
    {
        
        return $this->alto * $this->ancho;
    }

}

?>
