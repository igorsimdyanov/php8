<?php
namespace MVC\Views;

abstract class ViewFactory
{
    abstract public function render();

    public static function create($type, $class, $decorator)
    {
        $class = 'MVC\\Views\\' . ucfirst($class) . ucfirst($type) . 'View';
        $obj = new $class($decorator);
        return $obj;
    }
}
