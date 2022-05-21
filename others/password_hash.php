<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Генерация хэша пароля</title>
  <meta charset='utf-8' />
</head>
<body>
<?php

// Обработчик HTML-формы
if (isset($_POST['password'])) {
    echo password_hash($_POST['password'], PASSWORD_DEFAULT) . '<br />';
}
?>
  <form method='post'>
    <input type='text' name='password'
           value='<?= htmlspecialchars($_POST['password'] ?? ''); ?>' />
    <input type='submit' value='Отправить' />
  </form>
</body>
</html>
