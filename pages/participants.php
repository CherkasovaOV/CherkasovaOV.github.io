<?php require '../php/form_data.php';
	$select_res = GetDataDB();
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
<body>
	<div class="main_hello result_hello">
		<!-- панель навигации -->
		<div class="navbar">
			<p><a href="../index.php">Главная</a></p>
			<p><a href="">Участники</a></p>
			<p><a href="registry_form.php">Регистрация</a></p>
		</div>
		<!-- /панель навигации -->
		<!-- контейнер для всей таблицы -->
		<div class="participants_table_full">
			<!-- контейнер заголовка таблицы-->
			<div class="participants_table_head">
				<h1>ФИО</h1>
				<h1>Секция</h1>
				<h1>Тема доклада</h1>
			</div>
			<!-- /контейнер заголовка таблицы-->
			<!-- контейнер тела таблицы -->
			<div class="participants_table_body">
				<?php foreach ($select_res as $row) {?>
				<div> 
					<p><?php echo $row['name']; ?></p>
					<p><?php echo $row['section']; ?></p>
					<p><?php echo $row['report']; ?></p>
				</div>
				<?php } ?>
				<!-- <div>
					<p>Петрова</p>
					<p>Экономика</p>
					<p>Как заработать миллион</p>
				</div>
				<div>
					<p>Михайлова</p>
					<p>Музыка</p>
					<p>Топ-10 лучших песен Макана. Братская аналитика</p>
				</div> -->
			</div>
			<!-- /контейнер тела таблицы -->
		</div>
		<!-- /контейнер для всей таблицы -->
	</div>
</body>
</html>