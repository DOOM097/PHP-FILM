<?php  include 'views/templates/header.php';?>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-lg-push-3">
                <form role="search" class="visible-xs">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="search" placeholder="ваш запрос" class="form-control input-lg">
                            <div class="input-group-btn">
                                <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>

                <?php
                include('views/templates/film.php');
                displayMoviesFromDatabase();
                ?>
                <div class="margin-8"></div>
                <?php
                include('views/templates/film.php');
                displaySerialsFromDatabase();
                ?>
                <div class="margin-8"></div>
                <a href="/KinoBaza_PHP/html/Inter_show.php"><h3>Как снимали Интерстеллар<h3></a>
                <hr>
                <p>
                    45 лет исполнилось Кристоферу Нолану — одному из самых успешных режиссеров нашего времени, чьи работы одинаково любимы как взыскательными критиками, так и простыми зрителями. Фильмом изначально занималась студия Paramount. Когда Кристофер Нолан занял место режжисера, студия Warner Bros., которая выпускала последние фильмы, добилась участия в проекте
                </p>

                <a href="/KinoBaza_PHP/html/Inter_show.php" class="btn btn-warning pull-right">читать</a>

                <div class="margin-8"></div>
                <a href="/KinoBaza_PHP/html/Tom.php"><h3>Актер Том Хенкс поделился впечатлением о фестивале</h3></a>
                <hr>
                <p>
                    16 февраля в Лондоне состоялась 67-я церемония вручения наград Британской киноакадемии. Леонардо ДиКаприо, Брэд Питт, Анджелина Джоли, Кейт Бланшетт, Хелен Миррен, Эми Адамс, Кристиан Бэйл, Альфонсо Куарон и другие гости и победители премии — в нашем репортаже.
                </p>
                <a href="/KinoBaza_PHP/html/Tom.php" class="btn btn-warning pull-right">читать</a>
                <div class="margin-8 clear"></div>
            </div>
            <?php  include 'views/templates/other.php';?>
        </div>
    </div>
    <div class="clear"></div>
</div>

<?php  include 'views/templates/footer.php';?>
