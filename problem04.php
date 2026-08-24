<?php

// problem 4

$movies = [
    'Interstellar',
    'Inception',
    'The Dark Knight',
    'The Matrix',
    'The Lord of the Rings: The Return of the King'
];

function showMovies($movies) {
    foreach ($movies as $movie) {
        echo "<li> $movie </li>";
    }
}

require "views/problem04-view.php";