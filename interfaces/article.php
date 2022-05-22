<?php
require_once 'topic.php';
class Article extends Topic {
    public $authors;

    public function __construct(
        $title,
        $content,
        $authors,
        $published_at = null)
    {
        parent::__construct($title, $content, $published_at);
        $this->authors = $authors;
    }
}
