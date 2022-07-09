<?php
namespace Factory\Models;

class Collection extends \Factory\Router
{
    public function __construct(public ?array $collection = null) {}

    public function renders() : array
    {
        return array_map(
                   fn($item) => $item->render(),
                   $this->collection);
    }

    public function render() : string
    {
        return implode('<br />', $this->renders());
    }
}
