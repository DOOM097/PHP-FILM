<?php

include_once('../database_connect/database.php');
function getSerialsFromDatabase()
{

//    include_('../database_connect/database.php');

    $conn = connectToDatabase();


    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $query = "SELECT id, title, rating, image_address FROM movies WHERE title IN ('Секретные материалы', 'Силиконовая долина', 'Ходячие мертвецы', 'Во все тяжкие')";
    $result = $conn->query($query);

    $serials = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $serials[] = $row;
        }
    }

    $conn->close();

    return $serials;
}

function displaySerials()
{
    $serials = getSerialsFromDatabase();

    echo '<div class="panel-body">';

    foreach ($serials as $movie) {
        echo '<ul class="list-group">';
        echo '<li class="list-group-item list-group-warning">';
        echo '<span class="badge">' . $movie['rating'] . '</span>';
        echo '<a href="/KinoBaza_PHP/views/movie.php?id=' . $movie['id'] . '">' . $movie['title'] . '</a>';
        echo '</li>';
        echo '</ul>';
    }

    echo '</div>';
}






//// Вызов функции для отображения фильмов
//displayMoviesFromDatabase();
//

?>