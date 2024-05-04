<?php
	session_start();

	if(!$_SESSION['user']) {
		header('Location: /');
	}

?>

<!DOCTYPE html>
<html lang="ru, en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- [link] -->
	<link rel="stylesheet" type="text/css" href="assets/css/profile.css" id="them">
	<link rel="stylesheet" type="text/css" href="assets/css/fonts.css"> <!-- [fonts.css] -->
	<link rel="stylesheet" type="text/css" href="assets/css/media.css"> <!-- [media.css] -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/dark.css"> [dark.css] -->
	<link rel="icon" type="image/x-icon" href="assets/images/icon/logo.svg"> <!-- [logo/JS-Test | Project] -->

	<!-- [js] -->
	<script src="./assets/js/profile-them.js" defer></script>

	<title>Профиль</title>
</head>
<body>
	<section class="authorization">
		<div class="authorization__logo">
			<h1 class="logo">Профиль</h1>
			<button class="authorization__btn" id="switchMode">
				<div class="authorization__btn--img"></div>
			</button>
		</div>
		<div class="authorization__content">
			<div class="authorization__clue">
				<h3>Ваш ник...</h3>
				<h3 class="pt">Ваша почта</h3>
			</div>
			<form class="profile">
				<h2 class="profile__login"> <?= $_SESSION['user']['login']?> </h2>
				<a class="profile__email" href="#"><?= $_SESSION['user']['email'] . '<br>' ?></a>
				<br>
				<a class="profile__hover" href="assets/vendor/profile.php">Выход</a>
			</form>
	</section>
</body>
</html>