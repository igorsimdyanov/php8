<?php
class Page
{
    // Конструктор класса
    public function __construct(
        protected string $title = '',
        protected string $content = ''
    ) {}

    // Получение заголовка страницы
    public function title()
    {
        return $this->title;
    }

    // Получение содержимого страницы
    public function content()
    {
        return $this->content;
    }

    // Формирование HTML-представления страницы
    public function render()
    {
        echo '<h1>' . htmlspecialchars($this->title()) . '</h1>';
        echo '<p>' . nl2br(htmlspecialchars($this->content())) . '</p>';
    }
}
