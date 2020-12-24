<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/contact-with-me.css" />
	<link rel="stylesheet" href="/assets/css/navbar.css" />
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/title.php" ?>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header__titles">
				<h1>
					Связаться со мной!
				</h1>
			</div>
		</div>
	</header>
	<section class="contact-with-me">
		<div class="container">
			<p class="contact-with-me__text text">
				По всем вопросам касательно сайта пишите по адресу it-mechanism@mail.ru.
				</br>
				Спасибо за посещение сайта.
			</p>
		</div>
	</section>


	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/navbar.php" ?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/footer.php" ?>
</body>

</html>