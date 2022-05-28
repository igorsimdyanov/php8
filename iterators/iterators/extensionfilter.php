<?php
namespace Iterators;

class ExtensionFilter extends \FilterIterator
{
    // Фильтруемое расширение
    private $ext;
    // Итератор DirectoryIterator
    private $it;

    public function __construct(\DirectoryIterator $it, $ext)
    {
        parent::__construct($it);
        $this->it = $it;
        $this->ext = $ext;
    }

    // Метод, определяющий, удовлетворяет текущий элемент
    // фильтру или нет
    public function accept() : bool
    {
        if (!$this->it->isDir()) {
             $ext = pathinfo($this->current(), PATHINFO_EXTENSION);
             return $ext != $this->ext;
        }
        return true;
    }
}
