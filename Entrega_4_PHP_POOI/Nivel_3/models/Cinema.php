<?php

class Cinema{

    private $id;
    private $name;
    private $city;

    private $movies;

    private static $nextId = 1;

    public function __construct($name, $city, $movies){
        $this->id = self::$nextId;
        $this->name = $name;
        $this->city = $city;
        $this->movies = $movies;
        self::$nextId++;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getCity(): string{
        return $this->city;
    }

    public function getMovies(): array{
        return $this->movies;
    }
}