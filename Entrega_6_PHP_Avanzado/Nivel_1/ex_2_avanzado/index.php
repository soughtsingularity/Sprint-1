<?php

require 'classes/humanoide.php';

$humanoide = new Humanoide(level: 19, origin: "Earth", behavior: "Easy");

$humanoide->showFunctionInfo();

echo "<p>Estamos en la linea: ".__LINE__."</p>"

?>