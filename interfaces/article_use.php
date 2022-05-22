<?php
require_once 'article.php';

$obj = new Article(
    'Заголовок',
    'Содержиомое',
    ['Максим Кузнецов', 'Игорь Симдянов']);

echo $obj->title; // Заголовок
