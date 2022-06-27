<?php
require_once 'article_author_seo.php';

$obj = new Article('Заголовок', 'Содержимое');

$obj->setAuthor(['Дмитрий Котеров', 'Игорь Симдянов']);
$obj->seo('SEO-заголовок');
echo $obj->title(); // SEO-заголовок
