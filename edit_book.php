<?php
require 'db.php'; // Подключение к базе данных

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nn'])) {
    $nn = intval($_POST['nn']); // Преобразуем в целое число
    $author = $_POST['author'];
    $name = $_POST['name'];
    $year = $_POST['year'];
    $quantity = intval($_POST['quantity']); // Преобразуем в целое число

    // SQL-запрос на обновление
    $sql = "UPDATE books SET author = ?, name = ?, year = ?, quantity = ? WHERE nn = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiii", $author, $name, $year, $quantity, $nn); // Привязываем параметры
    if ($stmt->execute()) {
        echo "Запись успешно обновлена.";
    } else {
        echo "Ошибка обновления: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>