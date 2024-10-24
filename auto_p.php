<?php
require 'db.php'; // Подключение к базе данных
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    // Авторизация
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];

    if (!empty($username) && !empty($password)) {
        // Подготавливаем SQL-запрос для проверки пользователя
        $stmt = $conn->prepare("SELECT password,role  FROM users_table WHERE user_name = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($stored_password, $role);
            $stmt->fetch();

            // Проверяем пароль (не забудьте, что пароль теперь не хешируется)
            if ($password === $stored_password) {
                echo "Авторизация успешна!";
                $_SESSION['user'] = $username;
                $_SESSION['role'] = $role;
                header('Location: Home.php');
                // Здесь можно установить сессию
            } else {
                echo "Неверный пароль.";
            }
        } else {
            echo "Пользователь не найден.";
        }

        // Закрываем подготовленный запрос
        $stmt->close();
    } else {
        echo "Пожалуйста, заполните все поля для авторизации.";
    }
}


// Закрываем соединение
$conn->close();
?>