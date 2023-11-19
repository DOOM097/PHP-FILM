<div class="col-lg-3 col-lg-pull-9">
    <div class="panel panel-info hidden-xs">    <div class="panel-heading"><div class="sidebar-header">поиск</div></div>
        <div class="panel-body">
            <form role="search">
                <div class="form-group">
                    <div class="input-group">
                        <input type="search" class="form-control input-lg" placeholder="Ваш запрос">
                        <div class="input-group-btn">
                            <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-info">
        <div class="panel-heading"><div class="sidebar-heading">вход</div></div>
        <div class="panel-body">
            <form role="form">
                <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="логин">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control input-lg" placeholder="пароль">
                </div>
                <button type="submit" class="btn btn-warning pull-right">вход</button>

            </form>
        </div>
    </div>
    <div class="panel panel-info">
        <div class="panel-heading"><div class="sidebar-header">новости</div></div>
        <div class="panel-body">
            <p>31.02.2017</p>
            <p>Мы запустили новый сервис</p>
        </div>
    </div>

    <div class="panel panel-info">
        <div class="panel-heading"><div class="sidebar-header">рейтинг фильмов</div></div>
<!--        <div class="panel-body">-->
<!---->
<!--            <ul class="list-group">-->
<!--                <li class="list-group-item list-group-warning">-->
<!--                    <span class="badge">8.9</span>-->
<!--                    <a href="/KinoBaza_PHP/views/Inter.php">Интестеллар</a>-->
<!--                </li>-->
<!--                <li class="list-group-item list-group-warning">-->
<!--                    <span class="badge">8.7</span>-->
<!--                    <a href="/KinoBaza_PHP/views/max.php">Безумный макс</a>-->
<!--                </li>-->
<!--                <li class="list-group-item list-group-warning">-->
<!--                    <span class="badge">8.3</span>-->
<!--                    <a href="/KinoBaza_PHP/views/matrix.php">Матрица</a>-->
<!--                </li>-->
<!--                <li class="list-group-item list-group-warning">-->
<!--                    <span class="badge">8.1</span>-->
<!--                    <a href="/KinoBaza_PHP/views/atlas.php">Облачный атлас</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
        <?php include('img_db_film.php');
        displayMovies()
        ?>
    </div>
    <div class="panel panel-info">
        <div class="panel-heading"><div class="sidebar-header">рейтинг cериалов</div></div>
<!--        <div class="panel-body">-->
<!---->
<!--            <ul class="list-group">-->
<!--                <li class="list-group-item list-group-warning">-->
<!--                    <span class="badge">8.9</span>-->
<!--                    <a href="/KinoBaza_PHP/views/secret.php">секретные материалы</a>-->
<!--                </li>-->
<!--                <li class="list-group-item list-group-warning">-->
<!--                    <span class="badge">8.7</span>-->
<!--                    <a href="/KinoBaza_PHP/views/silicon.php">кремневая долина</a>-->
<!--                </li>-->
<!--                <li class="list-group-item list-group-warning">-->
<!--                    <span class="badge">8.3</span>-->
<!--                    <a href="/KinoBaza_PHP/views/zombi.php">ходячие мертвецы</a>-->
<!--                </li>-->
<!--                <li class="list-group-item list-group-warning">-->
<!--                    <span class="badge">8.1</span>-->
<!--                    <a href="/KinoBaza_PHP/views/risk.php">во все тяжкие</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->

        <?php include('img_db_serials.php');
        displaySerials();
        ?>
    </div>
</div>
