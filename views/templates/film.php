<?php
function displayMoviesFromDatabase()
{

    include_once('connecttoDB.php');

    $conn = connectToDatabase();

    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $movies = array("Интерстеллар", "Матрица", "Облачный атлас", "Безумный макс");

    echo "<h2>новые фильмы</h2>";
    echo "<hr>";
    echo "<div class='row'>";

    foreach ($movies as $movie) {
        $escapedTitle = mysqli_real_escape_string($conn, $movie);
        $query = "SELECT title, image_address FROM movies WHERE title='$escapedTitle'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo "<div class='films_block col-lg-3 col-md-3 col-sm-3 col-xs-6'>";
            echo "<a href='/KinoBaza_PHP/views/{$row['title']}.php'><img src='{$row['image_address']}' alt='{$row['title']}'></a>";
            echo "<div class='film_label'><a href='/KinoBaza_PHP/html/views.php'>{$row['title']}</a></div>";
            echo "</div>";
        }
    }

    echo "</div>";
    echo "<div class='margin-8'></div>";

    $conn->close();
}

function displaySerialsFromDatabase()
{

    include_once('connecttoDB.php');


    $conn = connectToDatabase();

    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $movies = array("секретные материалы", "Силиконовая долина", "ходячие мертвецы", "во все тяжкие");

    echo "<h2>новые сериалы</h2>";
    echo "<hr>";
    echo "<div class='row'>";

    foreach ($movies as $movie) {
        $escapedTitle = mysqli_real_escape_string($conn, $movie);
        $query = "SELECT title, image_address FROM movies WHERE title='$escapedTitle'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo "<div class='films_block col-lg-3 col-md-3 col-sm-3 col-xs-6'>";
            echo "<a href='/KinoBaza_PHP/views/{$row['title']}.php'><img src='{$row['image_address']}' alt='{$row['title']}'></a>";
            echo "<div class='film_label'><a href='/KinoBaza_PHP/html/views.php'>{$row['title']}</a></div>";
            echo "</div>";
        }
    }

    echo "</div>";
    echo "<div class='margin-8'></div>";

    $conn->close();
}