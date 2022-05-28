<?php
namespace Iterators;

class FSDirectory implements \IteratorAggregate
{
    public $path;
    // Конструктор
    public function __construct($path)
    {
        $this->path = $path;
    }
    // Возвращает итератор - "представителя" данного объекта
    public function getIterator() : FSDirectoryIterator
    {
        return new FSDirectoryIterator($this);
    }
}
