<?php
namespace Iterators;

class MyIterator implements \Iterator
{
    private mixed $index;
    private array $collection;

    public function __construct(array $collection)
    {
        $this->collection = $collection;
        $this->rewind();
    }

    public function rewind() : void
    {
        $this->index = 0;
    }

    public function current() : mixed
    {
        return $this->collection[$this->key()];
    }

    public function key() : mixed
    {
        return $this->index;
    }

    public function next() :void
    {
        ++$this->index;
    }

    public function valid() : bool
    {
        return isset($this->collection[$this->index]);
    }
}
