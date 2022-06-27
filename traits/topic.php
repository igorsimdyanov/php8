<?php
class Topic
{
    private $path;

    public function __construct(
        public string $title,
        public string $content,
        public ?int $published_at = null)
    {
        if(empty($published_at)) {
            $this->published_at = time();
        } else {
            $this->published_at = $published_at;
        }
    }
}
