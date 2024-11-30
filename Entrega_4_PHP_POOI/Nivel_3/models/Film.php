<?php

class Film{
    private $name;
    private $duration;

    private $director;

    public function __construct($name, $duration, $director){
        $this->name = $name;
        $this->duration = $duration;
        $this->director = $director;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getDuration(): int{
        return $this->duration;
    }

    public function getDirector(): string{
        return $this->director;
    }
}