<?php

/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
*/

class Shape{
    protected $ancho;
    protected $alto;

    public function __construct($ancho, $alto){
        $this->ancho = $ancho;
        $this->alto = $alto;
    }
}

class Triangulo extends Shape{

    public function area(){
        
        return ($this->ancho * $this->alto) / 2;
    } 

}

class Rectangulo extends Shape{

    public function area(){
        
        return $this->alto * $this->ancho;
    }

}

// $triangulo1 = new Triangulo(10,3);
// $rectangulo1 = new Rectangulo(10,3);

// echo "<p> El area del triangulo es ".$triangulo1->area()."</p>";
// echo "<p> El area del rectangulo es ".$rectangulo1->area()."</p>";


?>