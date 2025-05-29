<?php
include "data.php";
include "functions.php";

$groupedMovies = groupByGenre($movies);

echo "<h1>Movie Catalog</h1>";
displayMovies($groupedMovies);
?>
