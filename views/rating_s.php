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

                <h1>Рейтинг сериалов</h1>
                <hr>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Сериал</th>
                        <th class="text-center">год</th>
                        <th class="text-center">рейтинг</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-lg-1 col-md-1 col-xs-2">
                            <img src="/KinoBaza_PHP/assets/img/breakingbad.png" alt="во все тяжкие"
                                 class="img-responsive img-thumbnail">
                        </td>
                        <td class="vert-align"><a href="/KinoBaza_PHP/views/risk.php">Во все тяжкие</a></td>
                        <td class="text-center vert-align">2008</td>
                        <td class="text-center vert-align"><span class="badge">8.1</span></td>
                    </tr>
                    <tr>
                        <td class="col-lg-1 col-md-1 col-xs-2">
                            <img src="/KinoBaza_PHP/assets/img/xfiles.png" alt="секретные материалы"
                                 class="img-responsive img-thumbnail">
                        </td>
                        <td class="vert-align"><a href="/KinoBaza_PHP/views/secret.php">Секретные материалы</a></td>
                        <td class="text-center vert-align">1993</td>
                        <td class="text-center vert-align"><span class="badge">8.0</span></td>
                    </tr>
                    <tr>
                        <td class="col-lg-1 col-md-1 col-xs-2">
                            <img src="/KinoBaza_PHP/assets/img/silicon.png" alt="силиконовая долина"
                                 class="img-responsive img-thumbnail">
                        </td>
                        <td class="vert-align"><a href="/KinoBaza_PHP/views/silicon.php">Силиконовая долина</a></td>
                        <td class="text-center vert-align">2014</td>
                        <td class="text-center vert-align"><span class="badge">7.9</span></td>
                    </tr>
                    <tr>
                        <td class="col-lg-1 col-md-1 col-xs-2">
                            <img src="/KinoBaza_PHP/assets/img/dead.png" alt="ходячие мертвецы"
                                 class="img-responsive img-thumbnail">
                        </td>
                        <td class="vert-align"><a href="/KinoBaza_PHP/views/zombi.php">Ходячие мертвецы</a></td>
                        <td class="text-center vert-align">2010</td>
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
