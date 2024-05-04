<?php
	session_start();
	require_once 'connect.php';

	$login = $_POST['login'];
	$new_password = $_POST['newPassword'];

	$check_login = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login'");

	if ($login !== '') {
		if (mysqli_num_rows($check_login) < 1) {
			$response = [
				'status' => false,
				'type' => 1,
				'message' => 'Пользователь с таким логином не найден',
				'fields' => ['login']
			];
			
			echo json_encode($response);
			die();
		}
	}

	$error_fields = [];

	if ($login === '') {
		$error_fields[] = 'login';
	}
	if ($new_password === '') {
		$error_fields[] = 'newPassword';
	}

	if (!empty($error_fields)) {
		$response = [
			'status' => false,
			'type' => 1,
			'message' => 'Проверьте правильность полей',
			'fields' => $error_fields
		];

		echo json_encode($response);

		die();
	}

	
	$new_password = md5(md5(md5($new_password)));
	$update_password = mysqli_query($connect, "UPDATE `user` SET `password` = '$new_password' WHERE `login` = '$login'");

	if ($update_password) {
		$response = [
			'status' => true,
			'message' => 'Смена пароля прошла успешно'
		];
		echo json_encode($response);
	} else {
		$response = [
			'status' => false,
			'message' => 'Ошибка при смене пароля'
		];
		echo json_encode($response);
	}
?>