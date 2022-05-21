<?php
require_once 'page_a.php';

abstract class Cached extends Page
{
    // Время действия кэша
    protected $expires;
    // Хранилище
    protected $store;

    ...

    // Формируем уникальный ключ для хранилища
    abstract public function id($name);

    ...

}
