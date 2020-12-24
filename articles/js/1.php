<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/functions.php";
$article_id = get_article_id();
$comments =  get_comments($article_id, $connect);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/css/main.css" />
	<link rel="stylesheet" href="/assets/css/navbar.css" />
	<link rel="stylesheet" href="/assets/css/article.css" />
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/title.php" ?>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
	<header class="article-header">
		<div class="article-container">
			<div class="article-header__title">
				<h1>
					DOM (Document Object Model)
				</h1>
			</div>
		</div>
	</header>
	<section class="article-body">
		<div class="article-container">
			<p class="article-body__text">
				Язык JavaScript изначально был создан для веб-браузеров. Но с тех пор он значительно эволюционировал и превратился в
				кроссплатформенный язык программирования для решения широкого круга задач.
				</br>
				</br>
				Сегодня JavaScript может использоваться в браузере, на веб-сервере или в какой-то другой среде,
				даже в кофеварке. Каждая среда предоставляет свою функциональность, которую спецификация JavaScript называет
				окружением.
				</br>
				</br>
				Окружение предоставляет свои объекты и дополнительные функции, в дополнение базовым языковым. Браузеры, например, дают средства для управления веб-страницами.
				Node.js делает доступными какие-то серверные возможности и так далее.
				</br>
				</br>
				Document Object Model, сокращённо DOM – объектная модель документа, которая представляет все содержимое страницы в виде объектов, которые можно менять.
				Объект document – основная «входная точка». С его помощью мы можем что-то создавать или менять на странице.
			</p>
		</div>
	</section>
	<section class="article-comments">
		<div class="article-container">
			<div class="article-comments__title">
				<h2>Комментарии</h2>
			</div>
			<?php
			if (is_auth($connect)) {
				echo <<<HERE
<div class="article-comments__create-comment">
	<form class="article-comments__create-comment-form" >
		<input type="text" required class="input-comment" name="comment" placeholder="Написать комментарий...">
		<button name="submit_comment" class="btn grey btn-submit_comment" type="submit">Отправить</button>
	</form>
</div>
HERE;
			} else {
				echo <<<HERE
<div class="article-comments__error">
	<p class="article-comments__error-text">Чтобы оставить комментарий вам нужно войти в свою учётную запись</p>
</div>
HERE;
			} ?>
			<div class="article-comments__comments">
			</div>

		</div>
	</section>


	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/navbar.php" ?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . "/config/markup/footer.php" ?>
	<script>
		$(document).ready(function() {
			let comments = <?php echo json_encode($comments) ?>;
			if (comments !== null && typeof(comments) !== undefined) {
				for (let i = 0; i < comments.length; i++) {
					console.log("itr");
					$('.article-comments__comments').append(
						`<div class="article-comments__item">
							<span class="article-comments__item-author">` + comments[i]['name'] + `</span>
							<span class="article-comments__item-time">` + comments[i]['comment_date'] + `</span>
							<p class="article-comments__item-text">` +
						comments[i]['comment_text'] +
						`</p>
					</div>`);
				}

			}
			$(".article-comments__create-comment-form").submit(function(e) {
				e.preventDefault();
				let form = $(this).serialize();
				$.ajax({
					url: '/config/functional/create_comment.php',
					method: 'post',
					data: form + "&article_id=" + <?php echo $article_id ?>,
					success: function(data) {
						location.reload();
					}
				})

			})
		})
	</script>
</body>

</html>