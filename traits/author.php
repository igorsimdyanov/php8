<?php
trait Author
{
    public array $authors;

    public function getAuthor() : array
    {
        return $this->authors;
    }
    public function setAuthor(array $authors) : void
    {
        $this->authors = $authors;
    }
}
