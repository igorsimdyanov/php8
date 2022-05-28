<?php
namespace Iterators;

class FSFile
{
    public function __construct(public string $path) {}

    public function getSize() : int
    {
        return filesize($this->path);
    }
    // Здесь могут быть другие методы
}
