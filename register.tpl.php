<?php 
	session_start();

	if (isset($_SESSION['user'])) {
		header('Location: profile.tpl.php');
	}
?>

<!DOCTYPE html>
<html lang="ru,en">
<head>
	<!-- [meta] -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- [link] -->
	<link rel="stylesheet" type="text/css" href="assets/css/register.css" id="them"> <!-- [main.css] -->
	<link rel="stylesheet" type="text/css" href="assets/css/fonts.css"> <!-- [fonts.css] -->
	<link rel="stylesheet" type="text/css" href="assets/css/media.css"> <!-- [media.css] -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/dark.css"> [dark.css] -->
	<link rel="icon" type="image/x-icon" href="assets/images/icon/logo.svg"> <!-- [logo/JS-Test | Project] -->

	<!-- [js] -->
	<script src="./assets/js/jquery-3.7.1.min.js" defer></script>
	<script src="./assets/js/register-them.js" defer></script>
	<script src="./assets/js/main.js" defer></script>
	<script src="./assets/js/functions.js" defer></script>

	<!-- [title] -->
	<title>Регистрация</title>
</head>
<body>

	<section class="authorization">
		<div class="authorization__logo">
			<h1 class="logo">регистрация</h1>
			<button class="authorization__btn" id="switchMode">
				<div class="authorization__btn--img"></div>
			</button>
		</div>

		<div class="authorization__content">
			<div class="authorization__clue">
				<h3>Введите ник...</h3>
				<h3 class="pt">Введите почту...</h3>
				<h3 class="pt">Введите пароль...</h3>
				<h3 class="pt">Повторите пароль...</h3>
				<h3 class="pt">Авторизация</h3>
				<p>Если у вас есть аккаунт</p>
				<a href="index.tpl.php">Войти в аккаунт.</a>
			</div>

			<form class="authorization__user">
				<div class="authorization__user--login">
					<input class="authorization__input" id="login" type="text" name="login" placeholder="ЛОГИН...">
					<button type="button" class="authorization__user--btn" id="basket"><img src="./assets/images/icon/basket.svg"></button>
				</div>
				<input class="authorization__input mb" type="email" name="email" placeholder="ПОЧТА...">
				<div class="authorization__user--password">
					<input class="authorization__input" id="input-pass" type="password" name="password" placeholder="ПАРОЛЬ..." >
					<button type="button" class="authorization__user--btn authorization__vive"></button>
				</div>
				<input class="authorization__input mt" type="password" name="password_confirm" placeholder="ПОВТОР ПАРОЛЯ...">

				<button type="submit" class="authorization__auto" id="register-btn">Зарегистрироваться</button>
			</form>
			
		</div>
		<div class="authorization__links">
			<a href="https://vk.com/" class="authorization__link pd-1">
				<img src="./assets/images/icon/wk.svg" class="authorization__img">
			</a>
			<a href="https://discord.com/" class="authorization__link pd-2">
			<img src="./assets/images/icon/discord.svg" class="authorization__img">
			</a>
			<a href="https://store.steampowered.com/" class="authorization__link pd-3">
			<img src="./assets/images/icon/steam.svg" class="authorization__img">
			</a>
			<a href="https://www.google.com/" class="authorization__link pd-4">
			<img src="./assets/images/icon/google.svg" class="authorization__img">
			</a>
		</div>
	</section>

	<section class="model-error" id="model-error">
		<div class="model__content-error">
			<button class="model__close" id="close-model-error">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff">
					<path d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 
					16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 
					12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z">
					</path>
				</svg>
			</button>
			<h2 class="model__text-error">выполнено с ошибкой</h2>
		</div>
	</section>

	<section class="model-success" id="model-success">
		<div class="model__content">
			<button class="model__close" id="close-model-success">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff">
					<path d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 
					16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 
					12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z">
					</path>
				</svg>
			</button>
			<h2 class="model__text">выполнено успешно</h2>
		</div>
	</section>
</body>
</html>