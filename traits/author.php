<?php
trait Author
{
    public $authors;

    public function getAuthor()
    {
        return $this->authors;
    }
    public function setAuthor($authors)
    {
        $this->authors = $authors;
    }
}
