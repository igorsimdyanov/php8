<?php
namespace MVC\Views;

class HtmlView extends ViewFactory
{
    const LAYOUT = <<<HTML
    <!DOCTYPE html>
    <html lang="ru">
    <head>
      <title>{{{title}}}</title>
      <meta charset='utf-8' />
    </head>
    <body>{{{body}}}</body>
    </html>
HTML;

    protected $replacements;

    public function __construct(object $decorator)
    {
        $this->replacements = [
            '{{{title}}}' => $decorator->title(),
            '{{{body}}}' => $decorator->body()
        ];
    }

    public function render() : string
    {
        return str_replace(
                   array_keys($this->replacements),
                   array_values($this->replacements),
                   self::LAYOUT);
    }
}
