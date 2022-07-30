<?php
require_once 'cached.php';

class StaticPage extends Cached
{
    // Конструктор класса
    public function __construct(protected ?int $id)
    {
        // Проверяем, нет ли такой страницы в кэше
        if ($this->isCached($this->id($id))) {
            // Есть, инициализируем объект содержимым кэша
            parent::__construct($this->title(), $this->content());
        } else {
            // Данные пока не кэшированы, извлекаем
            // содержимое из базы данных
            // $query = "SELECT * 
            //           FROM static_pages
            //           WHERE id = :id LIMIT 1"
            // $sth = $dbh->prepare($query);
            // $sth = $dbh->execute($query, [$id]);
            // $page = $sth->fetch(PDO::FETCH_ASSOC);
            // parent::__construct($page['title'], $page['title']);
            // Устанавливаем признак кэша страницы
            // $this->set($this->id($id), 1);
            parent::__construct(
                'Контакты',
                'Содержимое страницы Контакты'
            );
        }
    }

    // Уникальный ключ для кэша
    public function id(mixed $name) : string
    {
      return "static_page_{$name}";
    }
}
