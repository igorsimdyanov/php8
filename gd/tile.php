<?php
$tile = imageCreateFromJpeg('sample1.jpg');
$im   = imageCreateTrueColor(800, 600);
imageFill($im, 0, 0, imageColorAllocate($im, 0, 255, 0));
imageSetTile($im, $tile);

// Создаем массив точек со случайными координатами
$p = [];
for ($i = 0; $i < 4; $i++) {
    array_push($p, rand(0, imageSX($im)), mt_rand(0, imageSY($im)));
}

// Рисуем закрашенный многоугольник
imageFilledPolygon($im, $p, IMG_COLOR_TILED);

// Выводим результат
header('Content-type: image/png');
imagePng($im);
