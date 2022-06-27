<?php
require_once 'article.php';

$obj = new Article(
    'Заголовок',
    'Содержимое',
    ['Дмитрий Котеров', 'Игорь Симдянов']);

echo $obj->title; // Заголовок
