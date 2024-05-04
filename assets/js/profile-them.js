// const switchMode = document.getElementById('switchMode');


// switchMode.addEventListener('click', () => {
// 	let them = document.getElementById('them');

// 	if (them.getAttribute('href') == 'assets/css/profile.css') {
// 		them.href = 'assets/css/profile-dark.css';
// 	} else {
// 		them.href = 'assets/css/profile.css';
// 	}
// });




// Функция для смены темы
const switchTheme = () => {
	let theme = localStorage.getItem('theme'); // Получаем текущую тему из localStorage
	console.log(theme);
	const them = document.getElementById('them');

	if (theme === 'dark') {
		them.href = 'assets/css/profile-dark.css';
	} else {
		them.href = 'assets/css/profile.css';
	}
};

// При загрузке страницы проверяем текущую тему
switchTheme();

// Слушатель события на кнопке смены темы
switchMode.addEventListener('click', () => {
	let theme = localStorage.getItem('theme'); // Получаем текущую тему из localStorage

	// Инвертируем текущую тему
	if (theme === 'dark') {
		localStorage.setItem('theme', 'light');
	} else {
		localStorage.setItem('theme', 'dark');
	}

	// Вызываем функцию смены темы для применения изменений
	switchTheme();
});

