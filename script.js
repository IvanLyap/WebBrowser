document.addEventListener("DOMContentLoaded", function(){
    // Получаем модальное окно
    var modal = document.getElementById("myAdd");
    var modal_edit = document.getElementById("myEd");
    var btn = document.getElementById("add_button");
    var add_span = document.getElementById("add_close");
    var edit_span = document.getElementById("edit_close");

    btn.onclick = function() {
        modal.style.display = "block";
    }
    
    edit_span.onclick = function() {
        modal_edit.style.display = "none";
    }

    add_span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        else if (event.target == modal_edit) {
            modal_edit.style.display = "none";
        }
    }

    

});
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