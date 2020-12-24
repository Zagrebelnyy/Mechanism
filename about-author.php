<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/about-author.css" />
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
					Об авторе
				</h1>
			</div>
		</div>
	</header>
	<section class="about-author">
		<div class="container">
			<p class="about-author__text text">
				Автор пока не добавил информацию о себе.
			</p>
		</div>
	</section>


	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/navbar.php" ?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/footer.php" ?>
	<script src="https://use.fontawesome.com/c84370bc57.js"></script>

</body>

</html>