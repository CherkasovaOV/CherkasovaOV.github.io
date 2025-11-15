<?php

// переменные для подключения
		$host = "MySQL-8.4";
		$dbname = "FINALTASK";
		$user = "root";
		$pass = "";
		// подключаемся к БД
		$db = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);

// TODO: добавить проверку уникальности про ключевым полям (всем), чтобы не плодить дубли в БД

// функция для записи данных из формы в БД
function SendToDB(){
		GLOBAL $db;

		// переменные для записи значений
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$bday = $_POST['birthday'];
		$section = $_POST['section'];
		$report = $_POST['report_topic'];

		// шаблон вставки
		$insert_q = "INSERT INTO FORM (name, phone, email, section, report, bday) VALUES (:name, :phone, :email, :section, :report, :bday)";

		$stmt = $db->prepare($insert_q);
		
		// привязываем параметры
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':section', $section);
        $stmt->bindParam(':report', $report);
        $stmt->bindParam(':bday', $bday);

        $stmt->execute();
	}

// функция для получения имени, секции, темы доклада из БД
function GetDataDB(){
	GLOBAL $db; // переменная с подключением

	$select_q = "SELECT name, section, report FROM FORM;";
	return $db->query($select_q);
}

