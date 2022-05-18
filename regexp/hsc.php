<?php
if (isset($_POST['text'])) {
    echo htmlspecialchars($_REQUEST['text']) . '<hr />';
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Прием текста от пользователя</title>
  <meta charset='utf-8' />
</head>
<body>
  <form action="hsc.php" method="POST">
    <textarea name="text" cols="60" rows="10">
      <?= htmlspecialchars($_POST['text'] ?? '') ?>
    </textarea><br />
    <input type="submit">
  </form>
</body>
</html>

