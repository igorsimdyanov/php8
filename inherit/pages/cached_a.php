<?php
require_once 'page_a.php';

abstract class Cached extends Page
{

    ...

    // Формируем уникальный ключ для хранилища
    abstract public function id(mixed $name) : string;

    ...

}
