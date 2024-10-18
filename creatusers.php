<?php
require 'db.php'; // Подключение к базе данны
require 'creatusers_p.php';
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
    <h2>Регистрация</h2>
    <form method="post" action="">
        <label for="username">Имя пользователя:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Зарегистрироваться">
        <a href="Home.php" class="button">Назад</a>
    </form>

    
</body>

</html>