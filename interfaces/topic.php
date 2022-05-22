<?php
require_once 'image_cover.php';

class Topic implements Cover
{
    public $title;
    public $content;
    public $published_at;
    private $path;

    public function __construct(
        $title,
        $content,
        $published_at = null)
    {
        $this->title = $title;
        $this->content  = $content;
        if(empty($published_at)) {
            $this->published_at = time();
        } else {
            $this->published_at = $published_at;
        }
    }
    public function getImage()
    {
        return $this->path;
    }
    public function setImage($path)
    {
        $this->path = $path;
    }
}
