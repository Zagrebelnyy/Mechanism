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
    <link rel="stylesheet" href="/assets/css/intro.css" />
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/title.php" ?>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
	<header class="intro-header">
		<div class="intro-container">
			<div class="intro-header__title">
				<h1>
					Язык программирования JavaScript
				</h1>
			</div>
		</div>
	</header>
	<section class="intro-body">
		<div class="intro-container">
			<p class="intro-body__title">
				<h2>Введение</h2>
            </p>
            <div class="intro-body__text">
                <ol>
                    <li><a href="/articles/js/1.php">Введение в JavaScript</a></li>
                    <li><a href="/articles/js/1.php">DOM</a></li>
                </ol>
            </div>
		</div>
	</section>



	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/navbar.php" ?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/footer.php" ?>
</body>

</html>