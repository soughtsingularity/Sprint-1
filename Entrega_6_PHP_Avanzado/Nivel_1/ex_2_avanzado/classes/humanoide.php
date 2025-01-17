<?php

class Humanoide{
    private $level;
    private $origin;
    private $behavior;

    public function __construct($level, $origin, $behavior){
        $this->level = $level;
        $this->origin = $origin;
        $this->behavior = $behavior;
    }

    public function showFunctionInfo(): void{

        echo "<p>El nombre de la clase es: ".__CLASS__. "</p>";
        echo "<p>El nombre de la función es: ". __FUNCTION__."</p>";
        echo "<p>El nombre completo del método es:  ". __METHOD__."</p>";

    }
}