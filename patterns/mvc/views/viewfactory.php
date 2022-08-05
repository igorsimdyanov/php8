<?php
namespace MVC\Views;

abstract class ViewFactory
{
    abstract public function render() : string;

    public static function create(
        string $type,
        string $class,
        \MVC\Decorators\DecoratorFactory $decorator) : ViewFactory
    {
        $class = 'MVC\\Views\\' .
                 ucfirst($class) .
                 ucfirst($type) .
                 'View';
        $obj = new $class($decorator);

        return $obj;
    }
}
