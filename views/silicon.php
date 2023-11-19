<?php  include '../views/templates/header.php';?>

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

                    <?php
                    include '../model/query_db_info.php';
                    // Заменяем данные о фильме с использованием функции
                    getMovieInfoAndReviews('Силиконовая долина');
                    ?>
						<form>
							<div class="form-group">
								<input placeholder="Ваше имя" type="text" class="form-control input-lg">
							</div>
							<div class="form-group">
								<textarea class="form-control"></textarea>
							</div>
							<button class="btn btn-lg btn-warning pull-right">отправить</button>
						</form>
						<div class="margin-8 clear"></div>
					</div>
                <?php include './templates/other.php'; ?>

            </div>

			</div>
		</div>
		<div class="clear"></div>
	</div>

<?php  include '../views/templates/footer.php';?>
