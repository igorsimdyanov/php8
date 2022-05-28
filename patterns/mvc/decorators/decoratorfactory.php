<?php
namespace MVC\Decorators;

abstract class DecoratorFactory
{
    public static function create($type, $class, $model)
    {
        $class = 'MVC\\Decorators\\' . ucfirst($class) . 'Decorator';
        return new $class($model);
    }

    abstract public function title();
    abstract public function body();
    abstract public function items();
}
