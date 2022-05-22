<?php
require_once 'topic.php';
require_once 'author.php';
require_once 'seo.php';

class Article extends Topic {
    use Author;
    use Seo;
}
