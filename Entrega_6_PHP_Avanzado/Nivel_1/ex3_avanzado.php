<?php

class Luchador{
    private $name, $level, $origin, $mana, $weapon;
    public function __construct($name, $level, $origin, $mana){
        $this->name = $name;
        $this->level = $level;
        $this->origin = $origin;
        $this->mana = $mana;
        $this->weapon = null;
    }

    public function setWeapon($weapon){
        $this->weapon = $weapon;
    }

    public function goArena(){
        echo "Luchador ".$this->name. " inscrito en el combate";
    }

    public function __serialize(): array{

        return [
            'name' => $this->name,
            'level' => $this->level,
            'origin' => $this->origin,
            'mana' => $this->mana,
            'weapon' => $this->weapon,
        ];
    }

    public function __unserialize($data){
        if(!isset($data['name'], $data['level'], $data['origin'], $data['mana'], $data['weapon'])){
            throw new InvalidArgumentException("Estas de la olla, te faltan datos, no serialices cosas que no son de serializar. Fatal error.");
        }else{
            $this->name = $data['name'];
            $this->level = $data['level'];
            $this->origin = $data['origin'];
            $this->mana = $data['mana'];
            $this->weapon = $data['weapon'];

            $this->goArena();
        }
    }
}

$luchador1 = new Luchador('Odor', 30, "Earth", 40);
$luchador1->setWeapon("Gun");
$luchador2 = new Luchador('Loki', 55, "Mars", 15);

try{

    $inscripcion = serialize($luchador1);
    unserialize($inscripcion) ;
    echo "<br>";
    $inscripcion = serialize($luchador2);
    unserialize($inscripcion) ;

} catch(InvalidArgumentException $e){
    echo $e->getMessage();
}


?>