<?php

include_once 'data/cineCartelera.php';


class CinemaController{

    private $cines;

    public function __construct($cines){

        $this->cines = $cines;
    }

    public function getCines(): array{
        return $this->cines;
    }

    public function getCineById($id){
        foreach($this->getCines() as $cine){
            if($cine->getId() == $id){
                return $cine;
            }
        }
    }

    function showFilmsInfo($cinema): string{

        $list ="";
    
        foreach($cinema->getMovies() as $movie){
            $list .= "<li>".$movie->getName().", con duracion ".$movie->getDuration()." minutos, dirigida por ".$movie->getDirector()."</li>";
        }
    
        return $list;
    }

    public function showLongestMovie($cinema): mixed{
        if(empty($cinema->getMovies())){
            echo "No hay peliculas en el cine";
        }

        return array_reduce(
            array: $cinema->getMovies(),
            callback: function ($longestMovie, $currentMovie): mixed {
                return $longestMovie === null || $currentMovie->getDuration() > $longestMovie->getDuration()
                    ? $currentMovie
                    : $longestMovie;
            },
            initial: null 
        );    }

    public function searchByDirector($director): string{

        $list = "";
        
        foreach($this->cines as $cine){
            foreach($cine->getMovies() as $movie){
                if(strtolower(string: $movie->getDirector()) == strtolower(string: $director)){
                    $list .= "<li>".$movie->getName()." en ".$cine->getName()."</li>";
                }
            }
        }

        return $list;
    }

}


