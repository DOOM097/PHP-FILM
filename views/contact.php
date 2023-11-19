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

                <h1>Контакты</h1>
                <hr>

                <p>отправте ваш отзыв о портале КиноБаза</p>

                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="ваш email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control"></textarea>
                    </div>
                    <button class="btn btn-lg btn-warning pull-right">отправить</button>
                </form>

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
<?php include '../views/templates/templates/footer.php'; ?>
