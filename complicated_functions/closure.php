<?php
$message = 'Работа не может быть продолжена из-за ошибок:<br />';
$check = function(array $errors) use ($message)
{
    if (isset($errors) && count($errors) > 0) {
        echo $message;
        foreach($errors as $error) {
            echo "$error<br />";
        }
    }
};

$check([]);
// ...
$errors[] = 'Заполните имя пользователя';
$check($errors);
// ...
$message = 'Список требований'; // Уже не изменить
$errors = ['PHP', 'PostgreSQL', 'Redis'];
$check($errors);
