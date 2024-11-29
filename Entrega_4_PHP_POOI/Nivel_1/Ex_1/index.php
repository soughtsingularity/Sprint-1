<?php

/*Crea una classe Employee, defineix com a atributs el seu nom i sou. 
Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos).
*/
require 'classes/employee.php';

$empleado1 = new Employee(nombre: "Ramon", sueldo: 700);

$empleado2 = new Employee (nombre: "Ramon", sueldo: 400);
 
echo $empleado1->payTaxes();
echo $empleado2->payTaxes();

?>