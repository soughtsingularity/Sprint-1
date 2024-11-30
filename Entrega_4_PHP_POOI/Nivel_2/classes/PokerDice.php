<?php

class PokerDice{

    private $shapes = [
        1 => "As", 
        2 => "K", 
        3 => "Q", 
        4 => "J", 
        5 => "7", 
        6 => "8"];

    public function throw (): int{

        return rand(min: 1,max: 6);
    }

    public function shapeName($throw): string{

        foreach($this->shapes as $key => $value){
            if($throw == $key){
                return $value;
            }
        }
    }
}