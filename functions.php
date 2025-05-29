<?php
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
