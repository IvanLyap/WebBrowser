<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Библиотека</title>
    <link rel="stylesheet" href="styles.css"> <!-- Подключение CSS файла -->
</head>

<body>

    <header>
        <h1>Добро пожаловать в Библиотеку</h1>
        <div class="button_class">
            <a href="login.html" class="button">Вход</a>
            <a href="creatusers.php" class="button">Регистрация</a>
        </div>
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


</body>
<script src="script.js"></script>
</html>