<!DOCTYPE html>
<html lang="ru">
<?php
session_start();
$isLoggedIn = isset($_SESSION['user']);
$userName = $_SESSION['user'] ?? 'Гость';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Библиотека</title>
    <link rel="stylesheet" href="styles.css"> <!-- Подключение CSS файла -->
</head>

<body>

    <header>
        <h1>Добро пожаловать в Библиотеку, <?php echo htmlspecialchars($userName); ?>!</h1>
        <?php if ($isLoggedIn): ?>
        <div class="button_class">
                <a href="logout.php" class="button">Выход</a>
            <?php else: ?>
                <a href="auto.php" class="button">Вход</a>
            <a href="creatusers.php" class="button">Регистрация</a>
        </div>
        <?php endif; ?>
    </header>

    <div class="container">


    </div>
    <h2>Доступные книги</h2>


</body>

</html>