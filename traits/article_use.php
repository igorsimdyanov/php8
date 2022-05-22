<?php
require_once 'article.php';

$obj = new Article(
    'Заголовок',
    'Содержиомое');

$obj->setAuthor(['Максим Кузнецов', 'Игорь Симдянов']);
$obj->seo('SEO-заголовок');
echo $obj->title(); // SEO-заголовок
