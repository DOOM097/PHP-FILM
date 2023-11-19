<?php include '../views/templates/header.php'; ?>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-lg-push-3">
                <form role="search" class="visible-xs">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="search" placeholder="ваш запрос" class="form-control input-lg">
                            <div class="input-group-btn">
                                <button class="btn btn-default btn-lg" type="submit"><i
                                            class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>

                <h1>Рейтинг фильмов</h1>
                <hr>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th></th>
                        <th>фильм</th>
                        <th class="text-center">год</th>
                        <th class="text-center">рейтинг</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-lg-1 col-md-1 col-xs-2">
                            <img src="/KinoBaza_PHP/assets/img/inter.png" alt="Интестеллар"
                                 class="img-responsive img-thumbnail">
                        </td>
                        <td class="vert-align"><a href="/KinoBaza_PHP/views/Inter.php">Интестеллар</a></td>
                        <td class="text-center vert-align">2015</td>
                        <td class="text-center vert-align"><span class="badge">8.1</span></td>
                    </tr>
                    <tr>
                        <td class="col-lg-1 col-md-1 col-xs-2">
                            <img src="/KinoBaza_PHP/assets/img/cloud.png" alt="Облачный атлас"
                                 class="img-responsive img-thumbnail">
                        </td>
                        <td class="vert-align"><a href="/KinoBaza_PHP/views/atlas.php">Облачный атлас</a></td>
                        <td class="text-center vert-align">2012</td>
                        <td class="text-center vert-align"><span class="badge">8.0</span></td>
                    </tr>
                    <tr>
                        <td class="col-lg-1 col-md-1 col-xs-2">
                            <img src="/KinoBaza_PHP/assets/img/matrix.png" alt="Матрица"
                                 class="img-responsive img-thumbnail">
                        </td>
                        <td class="vert-align"><a href="/KinoBaza_PHP/views/matrix.php">Матрица</a></td>
                        <td class="text-center vert-align">2002</td>
                        <td class="text-center vert-align"><span class="badge">7.9</span></td>
                    </tr>
                    <tr>
                        <td class="col-lg-1 col-md-1 col-xs-2">
                            <img src="/KinoBaza_PHP/assets/img/max.png" alt="Безумный макс"
                                 class="img-responsive img-thumbnail">
                        </td>
                        <td class="vert-align"><a href="/KinoBaza_PHP/views/max.php">Безумный макс</a></td>
                        <td class="text-center vert-align">2015</td>
                        <td class="text-center vert-align"><span class="badge">8.0</span></td>
                    </tr>

                    </tbody>
                </table>


                <div class="margin-8 clear"></div>
            </div>
            <div class="col-lg-3 col-lg-pull-9">
                <div class="panel panel-info hidden-xs">
                    <div class="panel-heading">
                        <div class="sidebar-header">поиск</div>
                    </div>
                    <div class="panel-body">
                        <form role="search">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="search" class="form-control input-lg" placeholder="Ваш запрос">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default btn-lg" type="submit"><i
                                                    class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="sidebar-heading">вход</div>
                    </div>
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
                    <div class="panel-heading">
                        <div class="sidebar-header">новости</div>
                    </div>
                    <div class="panel-body">
                        <p>31.02.2017</p>
                        <p>Мы запустили новый сервис</p>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="sidebar-header">рейтинг фильмов</div>
                    </div>
                    <?php include('../model/query_db_img.php');
                    displayMovies()
                    ?>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="sidebar-header">рейтинг cериалов</div>
                    </div>
                    <?php include('../model/db_query.php');
                    displaySerials();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php include '../views/templates/footer.php'; ?>
