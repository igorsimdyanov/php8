<?php
namespace Factory;

abstract class Router
{
    public static function parse(string $url) : mixed
    {
        $arr = explode('/', $url);
        $class = 'Factory\\Models\\' . ucfirst($arr[0]);
        $id = count($arr) > 1 ? $arr[1] : null;
        $obj = new $class();

        return is_null($id) ? $obj : $obj->collection[$id];
    }

    abstract public function render();
}
