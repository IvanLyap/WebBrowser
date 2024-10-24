function delete_User(nn) {
    if (confirm('Вы уверены, что хотите удалить пользователя с номером ' + nn + '?')) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "delete_user_c.php", true);
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