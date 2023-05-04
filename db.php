<?php 
require_once './Models/Genre.php';
require_once './Models/Movie.php';

$movie01 = new Movie("Interstellar", new Genre ("Adventure", "Drama", "SciFi"), "Christopher Nolan", 2014);
$movie02 = new Movie("Old Boy", new Genre ("Action", "Drama", "Mystery"), "Park Chan-wook", 2003);
$movie03 = new Movie("The Last Samurai", new Genre ("Action", "Drama", "Inspirational"), "Edward Zwick", 2003);
$movie04 = new Movie("The Curious Case of Benjamin Button", new Genre ("Romance", "Drama", "Fantasy"), "David Fincher", 2008);


$movies = [
    $movie01, $movie02, $movie03, $movie04 
];
