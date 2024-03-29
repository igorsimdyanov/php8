<?php
$dirname = "./";
$cat = dir($dirname);

$file_count = 0;
$dir_count = 0;

// Подсчитываем количество файлов и подкаталогов
while (($file = $cat->read()) !== false) {
    if (is_file($dirname.$file)) $file_count++;
    else $dir_count++;
}

// Не учитываем служебные подкаталоги
$dir_count = $dir_count - 2;
// Выводим количество файлов и подкаталогов
echo "Каталог $dirname содержит $file_count файлов
      и $dir_count подкаталогов<br />";

// Устанавливаем указатель каталога в начало
$cat->rewind();

// Читаем содержимое каталога
while (($file = $cat->read()) !== false) {
    if ($file != '.' && $file != '..') {
        echo $file . '<br />';
    }
}
// Закрываем каталог
$cat->close();
