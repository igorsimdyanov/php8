<?php
namespace MVC\Views;

class RssView extends ViewFactory
{
    const LAYOUT = <<<RSS
      <?xml version="1.0" encoding="UTF-8"?>
      <rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" />
      <channel>
        <title>{{{title}}}</title>
        <link>http://example.com/</link>
        {{{items}}}
      </channel>
    </rss>
RSS;

    protected $replacements;

    public function __construct(object $decorator)
    {
        $this->replacements = [
            '{{{title}}}' => $decorator->title(),
            '{{{items}}}' => $decorator->items()
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
