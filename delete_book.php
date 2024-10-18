<?php
require 'db.php'; // Подключение к базе данных
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nn'])) {
    $nn = intval($_POST['nn']); // Преобразуем в целое число для безопасности

    // SQL-запрос на удаление
    $sql = "DELETE FROM books WHERE nn = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $nn); // Привязываем параметр
    if ($stmt->execute()) {
        echo "Запись успешно удалена.";
    } else {
        echo "Ошибка удаления: " . $conn->error;
    }
    $stmt->close();
}

$conn->close();
?>