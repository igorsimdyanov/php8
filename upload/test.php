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
  Выберите какой-нибудь файл в форме ниже:
  <form action="test.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="myFile" />
    <input type="submit" name="doUpload" value="Закачать" />
  </form>
</body>
</html>
