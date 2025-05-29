<?php
// Function to group movies by genre
function groupByGenre($movieList) {
    $grouped = [];
    foreach ($movieList as $movie) {
        $genre = $movie["genre"];
        if (!isset($grouped[$genre])) {
            $grouped[$genre] = [];
        }
        $grouped[$genre][] = $movie;
    }
    return $grouped;
}

// Function to print a list of movies
function displayMovies($groupedMovies) {
    foreach ($groupedMovies as $genre => $movies) {
        echo "<h2>$genre</h2><ul>";
        foreach ($movies as $movie) {
            echo "<li>{$movie['title']} ({$movie['year']})</li>";
        }
        echo "</ul>";
    }
}
?>
