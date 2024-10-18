<?php
require 'db.php'; // Подключение к базе данны
$sql = "SELECT * FROM books"; // Замените 'books' на название вашей таблицы
$result = $conn->query($sql);

?>

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

    <div class="user_buttons">
    <button class="button" id="add_button">Добавить</button>
    </div> 

    <div id="myAdd" class="wind">
        <div class="wind_screen">
            <span class="close">&times;</span>
            <form action="add_book.php" method="post">
                <label for="input1">Автор:</label><br>
                <input type="text" id="author" name="author" required><br><br>
                <label for="input2">Название:</label><br>
                <input type="text" id="name" name="name" required><br><br>
                <label for="input1">Год:</label><br>
                <input type="text" id="year" name="year" required><br><br>
                <label for="input1">Количество:</label><br>
                <input type="text" id="quantity" name="quantity" required><br><br>
                <input type="submit" value="Отправить">
            </form>
        </div>
    </div>

    <h2>Доступные книги</h2>
    <div class="book-list">
    <?php if ($result->num_rows > 0): ?>
        <?php while ($book = $result->fetch_assoc()): ?>
            <div class="book">
                <p>Название: <?php echo htmlspecialchars($book['name']); ?></p>
                <p>Автор: <?php echo htmlspecialchars($book['author']); ?></p>
                <p>Год: <?php echo htmlspecialchars($book['year']); ?></p>
                <p>Количество: <?php echo htmlspecialchars($book['quantity']); ?></p>
                <button onclick="editBook(<?php echo htmlspecialchars($book['nn']); ?>)">Изменить</button>
                <button onclick="deleteBook(<?php echo htmlspecialchars($book['nn']); ?>)">Удалить</button>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Книг нет в наличии.</p>
    <?php endif; ?>
    </div>

    <div id="myEd" class="wind">
        <div class="wind_screen">
            <span class="close">&times;</span>
            <form action="edit_book.php" method="post">
                <label for="input1">Автор:</label><br>
                <input type="text" id="author" name="author" required><br><br>
                <label for="input2">Название:</label><br>
                <input type="text" id="name" name="name" required><br><br>
                <label for="input1">Год:</label><br>
                <input type="text" id="year" name="year" required><br><br>
                <label for="input1">Количество:</label><br>
                <input type="text" id="quantity" name="quantity" required><br><br>
                <input type="submit" value="Отправить">
            </form>
        </div>
    </div>

</body>
<script src="script.js"></script>
</html>