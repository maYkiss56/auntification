// запомнить логин и пароль
const loginInput = document.querySelector('input[name="login"]');
const passwordInput = document.querySelector('input[name="password"]');
const rememberCheckbox = document.querySelector('input[name="remember"]');

const saveCredentials = () => {
	if (rememberCheckbox.checked) {
		localStorage.setItem('login', loginInput.value);
		localStorage.setItem('password', passwordInput.value);
		localStorage.setItem('remember', true);
	} else {
		localStorage.removeItem('login');
		localStorage.removeItem('password');
		localStorage.removeItem('remember');
	}
};

const restoreCredentials = () => {
	const remember = localStorage.getItem('remember');
	if (remember === 'true') {
		const savedLogin = localStorage.getItem('login');
		const savedPassword = localStorage.getItem('password');
		if (savedLogin && savedPassword) {
			loginInput.value = savedLogin;
			passwordInput.value = savedPassword;
			rememberCheckbox.checked = true;
		}
	}
};

document.addEventListener('DOMContentLoaded', restoreCredentials);
rememberCheckbox.addEventListener('change', saveCredentials);