<?php
// Если поле first не заполнено, выводим сообщение об ошибке
if (empty($_POST['first'])) {
    exit('Текстовое поле не заполнено');
} else {
    echo htmlspecialchars($_POST['first']);
}
