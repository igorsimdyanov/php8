<?php
require_once 'topic.php';

class Article extends Topic {
    public function __construct(
        string $title,
        string $content,
        public array $authors,
        $published_at = null)
    {
        parent::__construct($title, $content, $published_at);
    }
}
