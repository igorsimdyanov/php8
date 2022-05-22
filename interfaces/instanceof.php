<?php
require_once 'article_author_seo.php';

$obj = new Article(
    'Заголовок',
    'Содержиомое');

if($obj instanceof Seo) {
    echo 'Объект реализует интерфейс Seo<br />';
}

if($obj instanceof Author) {
    echo 'Объект реализует интерфейс Author<br />';
}
