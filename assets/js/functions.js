// удаление содержимого в поле ввода login
const login = document.getElementById('login');
const delBtn = document.getElementById('basket');

delBtn.addEventListener('click', () => {
	login.value = '';
});


// просмотр пароля
const password = document.getElementById('input-pass');
const toggleBtn = document.querySelector('.authorization__vive');

toggleBtn.addEventListener('mousedown', () => {
	if (password.getAttribute('type') === 'password') {
		password.setAttribute('type', 'text');
	}
});

toggleBtn.addEventListener('mouseup', () => {
	if (password.getAttribute('type') === 'text') {
		password.setAttribute('type', 'password');
	}
});
