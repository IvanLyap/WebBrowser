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

    function editBook(id) {
        modal_edit.style.display = "block";
        document.getElementById('id').value = id;
    }

    function deleteBook(nn) {
        if (confirm('Вы уверены, что хотите удалить книгу с номером ' + nn + '?')) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "delete_book.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert(xhr.responseText);
                    location.reload();
                }
            };
    
            xhr.send("nn=" + nn);
        }
    }

    // Получаем модальное окно
    var modal_edit = document.getElementById("myEd");

    // Получаем элемент <span>, который закрывает модальное окно
    var span = document.getElementsByClassName("close")[0];

    // При нажатии на <span> (x), закрываем модальное окно
    span.onclick = function() {
        modal_edit.style.display = "none";
    }

    // При нажатии в любом месте вне модального окна закрываем его
    window.onclick = function(event) {
        if (event.target == modal_edit) {
            modal_edit.style.display = "none";
        }
    }