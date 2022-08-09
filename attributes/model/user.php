<?php
namespace Model;
use Attribute;

#[Model]
class User
{
}

#[Attribute]
class Model
{
    private const INFO = <<<TEXT
    Классы моделей предназначены 
    для представления содержимого базы данных
    TEXT;

    public function __construct() {}

    public function info()
    {
        return self::INFO;
    }
}
