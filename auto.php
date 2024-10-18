<?php
require 'db.php'; // Подключение к базе данны
require 'auto_p.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_1.css"> <!-- Подключение CSS файла -->
    <title>Регистрация</title>
</head>

<body>
    <!-- Форма авторизации -->
    <h2>Авторизация</h2>
    <form method="post" action="">
        <label for="login_username">Имя пользователя:</label><br>
        <input type="text" id="login_username" name="login_username" required><br><br>
        <label for="login_password">Пароль:</label><br>
        <input type="password" id="login_password" name="login_password" required><br><br>
        <input type="submit" name="login" value="Войти">
        <a href="Home.php" class="button">Назад</a>
    </form>
</body>

</html>