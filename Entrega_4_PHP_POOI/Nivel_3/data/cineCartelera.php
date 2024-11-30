<?php

include_once 'models/Cinema.php';
include_once 'models/Film.php';

$carteleraVerdi = [
    new Film(name: "Inception", duration: 148, director: "Christopher Nolan"),
    new Film(name: "Pulp Fiction", duration: 154, director: "Quentin Tarantino"),
    new Film(name: "The Shining", duration: 146, director: "Stanley Kubrick"),
    new Film(name: "The Godfather", duration: 175, director: "Francis Ford Coppola")
];

$carteleraPhenomena = [
    new Film(name: "Modern Times", duration: 87, director: "Charlie Chaplin"),
    new Film(name: "Interstellar", duration: 169, director: "Christopher Nolan"),
    new Film(name: "The Matrix", duration: 136, director: "Lana Wachowski, Lilly Wachowski"),
    new Film(name: "The Dark Knight", duration: 152, director: "Christopher Nolan")
];

$carteleraRenoir = [
    new Film(name: "Fight Club", duration: 139, director: "David Fincher"),
    new Film(name: "Parasite", duration: 132, director: "Bong Joon-ho"),
    new Film(name: "Blade Runner", duration: 117, director: "Ridley Scott"),
    new Film(name: "Schindler's List", duration: 195, director: "Steven Spielberg")
];

$cines =[
    new Cinema(name: "Verdi", city: "Barcelona", movies: $carteleraVerdi),
    new Cinema(name: "Phenomena", city: "Barcelona", movies: $carteleraPhenomena),
    new Cinema(name: "Renoir", city: "Barcelona", movies: $carteleraRenoir)
];

