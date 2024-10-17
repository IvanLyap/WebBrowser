<?php
$host = "localhost"; // Обычно localhost
$user = "admin"; // Ваше имя пользователя
$pass = "admin"; // Ваш пароль
$dbnm = "libree"; // Название вашей базы данных

// Создаем подключение
$conn = new mysqli($host, $user, $pass, $dbnm);

// Проверяем подключение
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

?>