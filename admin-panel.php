<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/admin-panel.css" />
	<link rel="stylesheet" href="/assets/css/navbar.css"/>
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/title.php" ?>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
	<!-- <header class="header">
		<div class="container">
			<div class="header__titles">
				<h1>
					Админ-панель
				</h1>
			</div>
		</div>
	</header> -->
	<section class="admin-panel">
		<div class="container">

			<div class="create-new-article">
				<form action="/config/functional/create-new-article.php" method="POST">
					<div class="create-new-article__title">
						<h2>Заголовок статьи</h2>
						<input class="input" required name="title" type="text">
					</div>
					<div class="create-new-article__subject">
						<h2>Раздел статьи</h2>
						<input class="input" required name="subject" type="text">
					</div>
					<div class="create-new-article__text">
						<h2>Текст статьи</h2>
						<textarea name="text" required cols="30" rows="10"></textarea>
					</div>
					<button type="submit" name="btn-create-new-article" class="btn-submit btn blue">Создать статью</button>
				</form>
			</div>
			<div class="delete-article">
				<form action="/config/functional/delete-article.php">
					<div class="delete-article__title">
						<h2>Идентификатор статьи</h2>
						<input class="input" name="article_id" type="text">
					</div>
					<button type="submit" name="btn-delete-article" class="btn-submit btn red">Удалить статью</button>
				</form>
			</div>
		</div>
	</section>


	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/navbar.php" ?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/footer.php" ?>
</body>

</html>