<!DOCTYPE html>
<html lang='ru'>
<head>
  <title>PHP автоматически создает переменные при закачке</title>
  <meta charset='utf-8' />
</head>
<body>
  <?php
  if (!empty($_POST['doUpload'])) {
      echo '<pre>Содержимое $_FILES: ' .
           print_r($_FILES, true) .
           '</pre><hr />';
  }
  ?>
  <form action="complex.php" method="POST" enctype="multipart/form-data">
  <h3>Выберите тип файлов в вашей системе:</h3>
    Текстовый файл: <input type="file" name="input[a][text]" /><br />
    Бинарный файл: <input type="file" name="input[a][bin]" /><br />
    <input type="submit" name="doUpload" value="Отправить файлы" />
  </form>
</body>
</html>
