<!-- head --> 
<?php require '../php/form_data.php';
// сразу сохраняем данные 
	SendToDB();
	// переменные для вывода
	$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$bday = $_POST['birthday'];
		$section = $_POST['section'];
		$report = $_POST['report_topic'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Лучшая конференция</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
	<link rel="icon" type="image/png" href="../img/favicon.png" sizes="32x32">
</head>
<!-- паннель навигации --> 
<body>
	<!-- основной контейнер страницы -->
	<div class="main_hello result_hello">
		<div class="navbar">
			<p><a href="../index.html">Главная</a></p>
			<p><a href="participants.html">Участники</a></p>
			<p><a href="registry_form.html">Регистрация</a></p>
		</div>
		<div class="check_val_form">
			<h1>Ваши данные сохранены: </h1>
		</div>	
	<!-- контейнер для результата и кнопок -->
	<div id="content_result">
		<!-- выводим данные из формы -->
			<div class="form_result">
				<div>
					<p class="form_keys">ФИО участника: </p>
					<p class="form_values"><?php echo $name; ?></p>
				</div>
				<div>
					<p class="form_keys">Контактный телефон: </p>
					<p class="form_values"><?php echo $phone; ?></p>
				</div>
				<div>
					<p class="form_keys">Дата рождения: </p>
					<p class="form_values"><? echo date('d.m.Y', strtotime($bday)); ?></p>
				</div>
				<div>
					<p class="form_keys">E-mail: </p>
					<p class="form_values"><?php echo $email; ?></p>
				</div>
				<div>
					<p class="form_keys">Секция: </p>
					<p class="form_values"><?php echo $section; ?></p>
				</div >
				<div>
					<p class="form_keys">Тема доклада: </p>
					<p class="form_values"><?php echo $report ?? '-'; ?></p>
				</div>
			</div> 
		<!-- /выводим данные из формы --> 
		<!-- Кнопки подтверждения данных -->
			<div class="result_buttons">
				<button class="btn-new"><a href="registry_form.php">Вернуться</a></button>
				<button class="btn-new"><a href="participants.php">Участники</button>
			</div>
		<!-- /Кнопки подтверждения данных -->
		</div>
	<!-- /контейнер для результата и кнопок -->
	</div>
	<!-- основной контейнер страницы -->
</body>
<!-- закидываем данные в БД --> 


