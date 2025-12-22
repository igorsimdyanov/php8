<?php


$phrase = 'Привет, это я!';
$phrase2 = "index.php?phrase=" . urlencode($phrase);

$url = $_SERVER['REQUEST_URI'];
$arr = parse_url($url);

$url1 = 'http://user:pass@www.site.ru/path/index.php?par=value#anch';
$arr1 = parse_url($url1);

echo '<pre>';
print_r($_GET);
echo '<pre>';

echo '<pre>';
print_r($arr);
echo '<pre>';

echo $url1;
echo '<pre>';
print_r($arr1);
echo '<pre>';

?>
 
<a href="index.php?phrase=<?= $phrase ?>">ссылка</a>
<a href="<?= $phrase2 ?>">ссылка</a>

<form>
    <input type="text" name="first">
    <input type="text" name="second">
    <input type="submit" value="send get">
</>

<form method="post">
    <input type="text" name="first">
    <input type="text" name="second">
    <input type="submit" value="send post">
</>
