<?php


function getMovieInfoAndReviews($movieTitle)
{
    // Подключаемся к базе данных
    include('../database_connect/database.php'); // Подключаем файл с функцией

// Вызываем функцию для создания соединения
    $conn = connectToDatabase();

    // Получаем информацию о фильме
    $sql_movie = "SELECT * FROM movies WHERE title = '$movieTitle'";
    $result_movie = $conn->query($sql_movie);

    // Выводим информацию о фильме
    if ($result_movie->num_rows > 0) {
        $row_movie = $result_movie->fetch_assoc();
        echo '<h1>' . $row_movie['title'] . '</h1>';
        echo '<hr>';
        echo '<div class="embed-responsive embed-responsive-16by9">';
        echo '<iframe width="560" height="315" src="' . $row_movie['video_link'] . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        echo '</div>';
        echo '<div class="well info-block text-center">';
        echo 'Год: <span class="badge">' . $row_movie['year'] . '</span>';
        echo 'Рейтинг: <span class="badge">' . $row_movie['rating'] . '</span>';
        echo 'Режиссер: <span class="badge">' . $row_movie['director'] . '</span>';
        echo '</div>';
        echo '<div class="margin-8"></div>';
        echo '<h2>Описание ' . $row_movie['title'] . '</h2>';
        echo '<hr>';
        echo '<div class="well">';
        echo $row_movie['description'];
        echo '</div>';
        echo '<div class="margin-8"></div>';
    } else {
        echo 'Фильм не найден.';
    }

    // Получаем отзывы о фильме
    $sql_reviews = "SELECT * FROM movies WHERE title = '$movieTitle'";
    $result_reviews = $conn->query($sql_reviews);

    // Выводим отзывы
    if ($result_reviews->num_rows > 0) {
        echo '<h2>Отзывы о ' . $row_movie['title'] . '</h2>';
        echo '<hr>';

        while ($row_review = $result_reviews->fetch_assoc()) {
            $userName = isset($row_review['user_name']) ? $row_review['user_name'] : 'Сергей';

            echo '<div class="panel panel-info">';
            echo '<div class="panel-heading"><i class="glyphicon glyphicon-user"><span>' . $userName . '</span></i></div>';
            echo '<div class="panel-body">' . $row_review['review'] . '</div>';
            echo '</div>';
        }
    } else {
        echo 'Отзывов пока нет.';
    }

    // Закрываем соединение с базой данных
    $conn->close();
}