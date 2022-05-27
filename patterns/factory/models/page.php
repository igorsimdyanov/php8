<?php
namespace Factory\Models;

class Page extends \Factory\Router
{
    public function __construct(
        public string $title,
        public string $content)
    {}

    public function render() : string
    {
        return '<h1>' . htmlspecialchars($this->title) . '</h1>' .
               '<p>' . htmlspecialchars($this->content) . '</p>';
    }
}
