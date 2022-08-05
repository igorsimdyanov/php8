<?php
namespace Iterators;

class FSDirectoryIterator implements \Iterator
{
    // Ссылка на "объект-начальник"
    private $owner;
    // Дескриптор открытого каталога
    private $d = null;
    // Текущий считанный элемент каталога
    private $cur = false;
    // Конструктор. Инициализирует новый итератор.
    public function __construct(FSDirectory $owner)
    {
        $this->owner = $owner;
        $this->d = opendir($owner->path);
        $this->rewind();
    }
    //*
    //* Переопределения виртуальных методов интерфейса Iterator
    //*
    // Устанавливает итератор на первый элемент
    public function rewind() : void
    {
        rewinddir($this->d);
        $this->cur = readdir($this->d);
    }
    // Проверяет, не закончились ли уже элементы
    public function valid() : bool
    {
        // readdir() возвращает false,
        // когда элементы каталога закончились
        return $this->cur !== false;
    }
    // Возвращает текущий ключ
    public function key() : mixed
    {
        return $this->cur;
    }
    // Возвращает текущее значение
    public function current() : FSDirectory|FSFile
    {
        $path = $this->owner->path."/".$this->cur;
        return is_dir($path)? new FSDirectory($path) : new FSFile($path);
    }
    // Передвигает итератор к следующему элементу в списке
    public function next() : void
    {
        $this->cur = readdir($this->d);
    }
}
