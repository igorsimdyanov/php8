<?php
namespace Iterators;

class LimitMyIterator implements \IteratorAggregate {

    public function __construct(
        private array $collection,
        private int $limit = 2)
    {}

    public function getIterator() : \Traversable
    {
        $limited = array_slice($this->collection, 0, $this->limit);
        return new MyIterator($limited);
    }
}
