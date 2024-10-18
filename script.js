    // Получаем модальное окно
    var modal = document.getElementById("myAdd");

    // Получаем кнопку, которая открывает модальное окно
    var btn = document.getElementById("add_button");

    // Получаем элемент <span>, который закрывает модальное окно
    var span = document.getElementsByClassName("close")[0];

    // При нажатии на кнопку открываем модальное окно
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // При нажатии на <span> (x), закрываем модальное окно
    span.onclick = function() {
        modal.style.display = "none";
    }

    // При нажатии в любом месте вне модального окна закрываем его
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }