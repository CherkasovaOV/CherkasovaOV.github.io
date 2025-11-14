const RadioReportTopic = document.getElementById('report_req'); // радиокнопка "требуется доклад"
const ReportContainer = document.getElementById('report_topic_container'); // контейнет в полем ля темы доклада
const ReportTopicInput = document.getElementById('report_topic'); // само поле для темы доклада
const ResetBotton = document.getElementById('reset_button'); // кнопка очистки формы
const nameInput = document.getElementById('name');
const phoneInput = document.getElementById('phone');
const sectionInput = document.getElementById('section');
const emailInput = document.getElementById('email');
const SubmitButton = document.getElementById('submit_button');


// скрываем текстовое поле с темой доклада. Определение
function MakeTopicVisible() {
	if (RadioReportTopic.checked){
		ReportContainer.classList.remove('hidden');
		ReportTopicInput.focus();
	}
	else {
		ReportContainer.classList.add('hidden');
		ReportTopicInput.value = '';
	}
}

// проверяем корректность заполнения полей формы
function CheckName(NameValue, PhoneValue, EmailValue, SectionValue){
	const trimmedName = NameValue.trim();
	const trimmedPhone = PhoneValue.trim();
	const trimmedEmail = EmailValue.trim();
	const trimmedSection= SectionValue.trim();
	const cyrillicRegex = /^[А-Яа-яЁё\s-]+$/u;
	const numberRegex = /^(?:\+7|8)\d{10}$/;
	const emailRegex = /^[\w.-]+@([\w-]+\.)+[\w-]{2,4}$/;

	if (trimmedName.length === 0){
		console.error('Имя не может быть пустым');
		return false;
	}
	else if (trimmedPhone.length === 0){
		console.error('Телефон должен быть указан');
		return false;
	}
	else if (trimmedSection.length === 0){
		console.error('Секция должна быть указана');
		return false;
	}
	else if (trimmedEmail.length === 0){
		console.error('Email не может быть пустым');
		return false;
	}
	else if (!cyrillicRegex.test(trimmedName)){
      console.error('В имени допускается только кириллица, пробелы и дефисы.');
      return false;
	}
	else if (!numberRegex.test(trimmedPhone)){
		console.error('номер телефона должен начинаться с +7/8 и содержать 11 цифр');
		return false;
	}
	else if (!emailRegex.test(trimmedEmail)){
		console.error('некорректный e-mail');
		return false;
	}
	else {
		return true;
	}
}


// скрываем тему доклада. Вызов при изменении состояния
RadioReportTopic.addEventListener('change', MakeTopicVisible);
ResetBotton.addEventListener('click', MakeTopicVisible);
// при оправлении проверям форму
SubmitButton.addEventListener('click', function(event) {
	const nameValue = nameInput.value;
	const emailValue = emailInput.value;
	const sectionValue = sectionInput.value;
	const phoneValue = phoneInput.value;

	if (!CheckName(nameValue, phoneValue, emailValue, sectionValue)) {
	 	 event.preventDefault();
	 	alert("Пожалуйста, проверьте корректность ввода данных!");
	 	
	}
});

