<?php
require 'db.php'; // Подключение к базе данных

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $author = $_POST['author'];
    $name = $_POST['name'];
    $year = $_POST['year'];
    $quantity = $_POST['quantity'];

    // Проверяем на заполненность
    if (!empty($author) && !empty($name) && !empty($year) && !empty($quantity)) {

        $stmt = $conn->prepare("INSERT INTO books (author, name,year,quantity) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $author, $name, $year, $quantity);

        // Выполняем запрос
        try{
        if ($stmt->execute()) {
            echo "Добавление успешно!";
        }
        }
        catch(Exception $e)  {
            echo "Ошибка: " . $e->getMessage();
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