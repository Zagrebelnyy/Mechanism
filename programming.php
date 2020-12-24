<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="/assets/css/navbar.css" />
	<link rel="stylesheet" href="assets/css/programming.css" />
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/title.php" ?>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header__titles">
				<h1>
					Программирование
				</h1>
			</div>
		</div>
	</header>
	<section class="programming">
		<div class="container">
			<h2 class="programming__title title">
				Выберите интересующий вас раздел
			</h2>
			<div class="programming__subjects">
				<a class="programming__item java" href="#">
					<div class="programming__item-description">
						<div class="programming__item-title">
							<h2>Разработка на Java</h2>
						</div>
						<div class="programming__item-text">
							Начните изучать самый популярный язык программирования в мире
						</div>
					</div>
					<div class="programming__item-img">
						<img src="/assets/images/java.png" alt="">
					</div>
				</a>
				<a class="programming__item php" href="#">
					<div class="programming__item-description">
						<div class="programming__item-title">
							<h2>Разработка на PHP</h2>
						</div>
						<div class="programming__item-text">
							Начните изучать язык серверной разработки
						</div>
					</div>
					<div class="programming__item-img">
						<img src="/assets/images/php.png" alt="">
					</div>
				</a>
				<a class="programming__item js" href="/articles/js/intro.php">
					<div class="programming__item-description">
						<div class="programming__item-title">
							<h2>Разработка на JavaScript</h2>
						</div>
						<div class="programming__item-text">
							Изчучите язык сценариев для создания интерфейсов веб-приложений
						</div>
					</div>
					<div class="programming__item-img">
						<img src="/assets/images/js.png" alt="">
					</div>
				</a>
				<a class="programming__item c++" href="#">
					<div class="programming__item-description">
						<div class="programming__item-title">
							<h2>Разработка на C++</h2>
						</div>
						<div class="programming__item-text">
							Изучите один из самых мощных языков программирования
						</div>
					</div>
					<div class="programming__item-img">
						<img src="/assets/images/c++.png" alt="">
					</div>
				</a>
			</div>
		</div>
	</section>


	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/navbar.php" ?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/footer.php" ?>
</body>

</html>