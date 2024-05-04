
// авторизация
	$('#open-model-btn').click( (e) => {
		e.preventDefault();

	$('.authorization__input').removeClass('authorization__input--error');

	const login = $('input[name="login"]').val();
	const password = $('input[name="password"]').val();
	
	$.ajax({
		url: 'assets/vendor/index.php',
		type: "POST",
		dataType: 'json',
		data: {
			login: login,
			password: password
		},
		success (data) {
			if (data.status) {
				$('.model-success').addClass('open');

				$(document).on('click', '.model-success', () => {
					$('.model-success').removeClass('open');
					window.location.href = './profile.tpl.php';
				});
			} else {
				if (data.type === 1) {
					data.fields.forEach((field) => {
						$(`input[name="${field}"]`).addClass('authorization__input--error');
					});
				}
				$('.model-error').addClass('open');
				
				$(document).on('click', '.model__close', () => {
					$('.model-error').removeClass('open');
				});
			}
		}
	});
});



// регистрация 
$('#register-btn').click( (e) => {
	e.preventDefault();

	$('.authorization__input').removeClass('authorization__input--error');

	const login = $('input[name="login"]').val();
	const email = $('input[name="email"]').val();
	const password = $('input[name="password"]').val();
	const password_confirm = $('input[name="password_confirm"]').val();

	const formData = new FormData();
	formData.append('login', login);
	formData.append('email', email);
	formData.append('password', password);
	formData.append('password_confirm', password_confirm);

	$.ajax({
		url: 'assets/vendor/register.php',
		type: 'POST',
		dataType: 'json',
		cache: false,
		contentType: false,
		processData: false,
		data: formData,
		success (data) {
			if (data.status) {
				$('.model-success').addClass('open');

				$(document).on('click', '.model-success', () => {
					$('.model-success').removeClass('open');
					window.location.href = './index.tpl.php';
				});
			} else {
				if (data.type === 1) {
					data.fields.forEach((field) => {
						$(`input[name="${field}"]`).addClass('authorization__input--error');
					});
				}
				$('.model-error').addClass('open');
					
				$(document).on('click', '.model__close', () => {
					$('.model-error').removeClass('open');
				});
			}
		}
	})
});

// смена пароля
$('#reset-btn').click( (e) => {
	e.preventDefault();

	$('.authorization__input').removeClass('authorization__input--error');

	const login = $('input[name="login"]').val();
	const newPassword = $('input[name="newPassword"]').val();

	$.ajax({
		url: 'assets/vendor/reset.php',
		type: 'POST',
		dataType: 'json',
		data: {
			login: login,
			newPassword: newPassword
		},
		success (data) {
			if (data.status) {
				$('.model-success').addClass('open');

				$(document).on('click', '.model-success', () => {
					$('.model-success').removeClass('open');
					window.location.href = './index.tpl.php';
				});
			} else {
				console.log(data.fields);
				if (data.type === 1) {
					data.fields.forEach((field) => {
						console.log(field);
						$(`input[name="${field}"]`).addClass('authorization__input--error');
					});
				}
			}
			$('.model-error').addClass('open');
				
			$(document).on('click', '.model__close', () => {
				$('.model-error').removeClass('open');
			});
		}
	})
})