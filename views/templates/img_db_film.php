<?php
function getMoviesFromDatabase()
{

    include_once('connecttoDB.php');

    $conn = connectToDatabase();


    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $query = "SELECT id, title, rating, image_address FROM movies WHERE title IN ('Интерстеллар', 'Безумный макс', 'Матрица', 'Облачный атлас')";
    $result = $conn->query($query);

    $movies = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $movies[] = $row;
        }
    }

    $conn->close();

    return $movies;
}

function displayMovies()
{
    $movies = getMoviesFromDatabase();

    echo '<div class="panel-body">';

    foreach ($movies as $movie) {
        echo '<ul class="list-group">';
        echo '<li class="list-group-item list-group-warning">';
        echo '<span class="badge">' . $movie['rating'] . '</span>';
        echo '<a href="/KinoBaza_PHP/views/movie.php?id=' . $movie['id'] . '">' . $movie['title'] . '</a>';
        echo '</li>';
        echo '</ul>';
    }

    echo '</div>';
}

