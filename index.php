<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/css/main.css" />
	<link rel="stylesheet" href="/assets/css/navbar.css" />
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/title.php" ?>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header__titles">
				<h1>
					Приветствую на своём сайте!
				</h1>
			</div>
		</div>
	</header>
	<section class="description">
		<div class="container">
			<h2 class="description__title title">
				О сайте
			</h2>
			<p class="description__text text">
				Данный сайт посвящен различным языкам программирования и ИТ-технологиям в сфере веб разработки.
				Здесь будут публиковаться статьи и руководства для начинающих программистов.
				Вы узнаете какие инструменты для разработки сейчас актуальны и какие навыки востребованы.
				Это поможет вам сделать первые шаги на пути к освоению одной из самых высокооплачиваемых специальностей.
				Поехали!
			</p>
		</div>
	</section>


	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/navbar.php" ?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/footer.php" ?>
</body>

</html>