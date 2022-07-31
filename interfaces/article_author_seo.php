<?php
require_once 'topic.php';
require_once 'author.php';
require_once 'seo.php';

class Article extends Topic implements Author, Seo
{
    public array $authors;
    private ?string $seo_title;
    private ?string $seo_description;
    private ?array $seo_keywords;

    public function getAuthor() : array
    {
        return $this->authors;
    }
    public function setAuthor(array $authors) : void
    {
        $this->authors = $authors;
    }
    public function seo(
        ?string $title = null,
        ?string $description = null,
        ?array $keywords = null) : void
    {
        $this->seo_title = $title;
        $this->seo_description = $description;
        $this->seo_keywords = $keywords;
    }
    public function title() : ?string
    {
        if (!empty($this->seo_title)) {
            return $this->seo_title;
        } else {
            return $this->title;
        }
    }
    public function description() : ?string
    {
        return $this->seo_description;
    }
    public function keywords() : ?array
    {
        return $this->seo_keywords;
    }
}
