<!DOCTYPE html>
<html lang="ru">
<head>
  <title>HTML-форма</title>
  <meta charset='utf-8' />
</head>
<body>
<?php
$errors = [];

// Обработчик HTML-формы
if (!empty($_POST)) {
    // Если поле first не заполнено, выводим сообщение об ошибке
    if (empty($_POST['first'])) {
        $errors[] = 'Текстовое поле не заполнено';
    }

    // Если нет ошибок, начинаем обработку данных
    if (empty($errors)) {
        // Выводим содержимое текстового поля first
        echo htmlspecialchars($_POST['first']);
        // Останавливаем работу скрипта, чтобы после
        // перенаправления не грузилась HTML-форма
        exit();
    }
}

// Выводим сообщения об ошибках, если они имеются
if (!empty($errors)) {
    foreach($errors as $err) {
        echo "<span style=\"color:red\">$err</span><br>";
    }
}
// HTML-форма
?>
  <form method='post'>
    <input type='text' name='first'
           value='<?= htmlspecialchars($_POST['first'] ?? '', ENT_QUOTES); ?>' />
    <input type='submit' value='Отправить' />
  </form>
</body>
</html>
