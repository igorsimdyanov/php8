<!DOCTYPE html>
<html lang="ru">
<head>
  <title>HTML-форма со скрытым полем</title>
  <meta charset='utf-8' />
</head>
<body>
  <form method='post' action='form_hidden_handler.php'>
    <textarea name='name' cols='50' rows='10'></textarea><br />
    <input type='submit' value='Отправить' />
    <input name='id' type='hidden' value="<?= intval($_GET['id'] ?? 0); ?>" />
  </form>
</body>
</html>
