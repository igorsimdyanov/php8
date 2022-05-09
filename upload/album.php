<?php
require_once('photo_album.php');

// Проверяем, нажата ли кнопка добавления фотографии
if ($_REQUEST['doUpload'] ?? false) {
    $file = new PhotoAlbum($_FILES['file']);
    // Проверяем, принят ли файл
    if (!is_uploaded_file($file->tempFileName())) {
        echo "<h2>Ошибка закачки #{$_FILES['file']['error']}!</h2>";
    // Проверяем, является ли файл изображением
    } elseif (!$file->isImage()) {
        echo '<h2>Попытка добавить файл недопустимого формата!</h2>';
    } else {
        move_uploaded_file($file->tempFileName(), $file->fileName());
    }
}
?>
<!DOCTYPE html>
<html lang='ru'>
<head>
  <title>Простейший фотоальбом с возможностью закачки</title>
  <meta charset='utf-8' />
</head>
<body>
  <form action="album.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" /><br />
    <input type="submit" name="doUpload" value="Закачать новую фотографию" />
  </form>
  <hr />
  <?php foreach(PhotoAlbum::list() as $img) {
      echo "<img src={$img['url']} {$img['wh']} />";
  }
  ?>
</body>
</html>
