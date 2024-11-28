<?php

/*Crea una classe Employee, defineix com a atributs el seu nom i sou. 
Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos).
*/

class Employee{

    private $nombre;
    private $sueldo;

    public function __construct($nombre, $sueldo){

        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function tribut(){
        echo "<p>$this->nombre</p>";

        return ($this->sueldo > 600) ? "Paga impuestos" : "No paga impuestos";
    }

}

$empleado1 = new Employee("Ramon", 700);

$empleado2 = new Employee ("Ramon", 400);
 
echo $empleado1->tribut();
echo $empleado2->tribut();

?>