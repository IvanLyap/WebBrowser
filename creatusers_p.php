<?php
require 'db.php'; // Подключение к базе данных

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = 'Читатель';

    // Проверяем на заполненность
    if (!empty($username) && !empty($password)) {
        // Хэшируем пароль


        // Подготавливаем SQL-запрос для вставки нового пользователя
        $stmt = $conn->prepare("INSERT INTO users_table (user_name, password,role) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password, $role);

        // Выполняем запрос
        if ($stmt->execute()) {
            echo "Регистрация успешна!";
        } else {
            echo "Ошибка: " . $stmt->error;
        }

        // Закрываем подготовленный запрос
        $stmt->close();
    } else {
        echo "Пожалуйста, заполните все поля.";
    }
}

// Закрываем соединение
$conn->close();
?>