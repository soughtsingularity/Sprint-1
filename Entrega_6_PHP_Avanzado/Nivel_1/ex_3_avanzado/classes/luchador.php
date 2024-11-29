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

    public function getName(): mixed{
        return $this->name;
    }

    public function setWeapon($weapon): void{
        $this->weapon = $weapon;
    }

    public function goArena(): void{
        echo "Luchador ".$this->name. " inscrito en el combate con arma: " .$this->weapon;
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

    public function __unserialize($data): void{
        if(!isset($data['name'], $data['level'], $data['origin'], $data['mana'], $data['weapon'])){
            throw new InvalidArgumentException(message: "Estas de la olla, te faltan datos, no serialices cosas que no son de serializar. Fatal error.");
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