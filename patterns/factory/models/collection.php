<?php
namespace Factory\Models;

class Collection extends \Factory\Router
{
    public function __construct(public ?string $collection = null) {}

    public function render() : array
    {
        return array_map(
                   fn($item) => $item->render(),
                   $this->collection);
    }
}
