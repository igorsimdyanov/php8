<?php
require_once 'page.php';

class Cached extends Page
{
    // Время действия кэша
    protected $expires;
    // Хранилище
    protected $store;

    // Конструктор класса
    public function __construct(
        $title = '',
        $content = '',
        $expires = 60)
    {
        // Вызываем конструктор базового класса Page
        parent::__construct($title, $content);
        // Устанавливаем время жизни кэша
        $this->expires = $expires;
        // Подготовка хранилища
        // $this->store = new Redis(
        //                      'host' => '127.0.0.1',
        //                      'port' => 6379,
        //                      'connectTimeout' => $this->expires);
        // Размещение данных в хранилище
        $this->set($this->id('title'), $title);
        $this->set($this->id('content'), $content);
    }

    // Проверить, есть ли позиция $key в кэше
    protected function isCached($key)
    {
        // return (bool) $this->store->get($key);
    }
    // Поместить в кэш по ключу $key значение $value.
    // В случае если ключ уже существует:
    // 1. Не делать ничего, если $force принимает значение false.
    // 2. Переписать, если $force принимает значение true.
    protected function set($key, $value, $force = false)
    {
        // if ($force) {
        //   $this->store->set($key, $value, $this->expires);
        // } else {
        //   if($this->isCached($key)) {
        //     $this->store->set($key, $value, $this->expires);
        //   }
        // }
    }
    // Извлечение значения $key из кэша
    protected function get($key)
    {
        // return $this->store->get($key);
    }

    // Формируем уникальный ключ для хранилища
    public function id(mixed $name) : string
    {
        die('Что здесь делать? Неизвестно!');
    }

    // Получение заголовка страницы
    final public function title()
    {
        // if ($this->isCached($this->id('title'))) {
        //   return $this->get($this->id('title'));
        // } else {
           return parent::title();
        // }
    }
    // Получение содержимое страницы
    final public function content()
    {
        // if ($this->isCached($this->id('content'))) {
        //   return $this->get($this->id('content'));
        // } else {
           return parent::content();
        // }
    }
}
