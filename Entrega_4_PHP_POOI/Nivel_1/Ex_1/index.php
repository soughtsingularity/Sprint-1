<?php

require 'classes/employee.php';

$empleado1 = new Employee(nombre: "Ramon", sueldo: 700);

$empleado2 = new Employee (nombre: "Ramon", sueldo: 400);
 
echo $empleado1->payTaxes();
echo $empleado2->payTaxes();

?>