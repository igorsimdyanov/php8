<?php
namespace MyModel;
use Attribute;

#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_CLASS)]
class MyModel
{
    const INFO = 'Класс для взаимодействия с базой данных';

    private $info;

    public function __construct($info = self::INFO)
    {
        $this->info = $info;
    }

    public function info()
    {
        return $this->info;
    }
}
