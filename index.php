<?php
include "data.php";
include "functions.php";

// Group the movies by genre using a function
$groupedMovies = groupByGenre($movies);

// Display the grouped movies
echo "<h1>Movie Catalog</h1>";
displayMovies($groupedMovies);
?>
