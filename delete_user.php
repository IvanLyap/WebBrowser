<?php
require 'db.php'; // Подключение к базе данны

$sql = "SELECT nn, user_name, role FROM users_table"; // Замените 'books' на название вашей таблицы
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_2.css"> <!-- Подключение CSS файла -->
    <title>Удаление</title>
    <script src="script2.js"></script>
</head>

<body>
    <div class="users_button">
    <a href="Home.php" class="button">Назад</a>
    </div>
    <div class="users-list">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($user = $result->fetch_assoc()): ?>
                <div class="user">
                    <p>Имя: <?php echo htmlspecialchars($user['user_name']); ?></p>
                    <p>Роль: <?php echo htmlspecialchars($user['role']); ?></p>
                    <button onclick="delete_User(<?php echo htmlspecialchars($user['nn']); ?>)">Удалить</button>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Книг нет в наличии.</p>
        <?php endif; ?>
    </div>

    
  
</body>
</html>

