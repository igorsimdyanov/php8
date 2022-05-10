<?php
require_once('filter_input_handler.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Фильтрация пользовательского ввода</title>
  <meta charset='utf-8' />
</head>
<body>
  <form method="POST">
    <input type="text" name="search" value="<?= $value?>" /><br />
    <input type="submit" value="Фильтровать" />
  </form>
  <?= $result; ?>
</body>
</html>
