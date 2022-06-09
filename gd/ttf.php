<?php
require_once 'lib/imagettf.php';
// Выводимая строка
$string = 'Привет, мир!';
// Шрифт
$font = getcwd() . '/times.ttf';
// Загружаем фоновой рисунок
$im = imageCreateFromPng('sample02.png');
// Угол поворота зависит от текущего времени
$angle = (intval(microtime(true))) % 360;
// Если хотите, чтобы текст шел из угла в угол,
// раскомментируйте строчку:
# $angle = rad2deg(atan2(imageSY($im), imageSX($im)));
// Подгоняем размер текста под размер изображения
$size = imageTtfGetMaxSize(
    $angle,
    $font,
    $string,
    imageSX($im),
    imageSY($im)
);
// Создаем в палитре новые цвета
$shadow = imageColorAllocate($im, 0, 0, 0);
$color  = imageColorAllocate($im, 128, 255, 0);
// Вычисляем координаты вывода, чтобы текст оказался в центре
$sz = imageTtfSize($size, $angle, $font, $string);
$x = intval((imageSX($im) - $sz[0]) / 2 + $sz[2]);
$y = intval((imageSY($im) - $sz[1]) / 2 + $sz[3]);
// Рисуем строку текста вначале черным со сдвигом, а затем
// основным цветом поверх (чтобы создать эффект тени)
imageTtfText($im, $size, $angle, $x + 3, $y + 2, $shadow, $font, $string);
imageTtfText($im, $size, $angle, $x, $y, $color, $font, $string);
// Сообщаем о том, что далее следует рисунок PNG
header('Content-type: image/png');
// Выводим рисунок
imagePng($im);
