<?php
namespace PHP8;
use \PHP8\Seo as Seo;
use \PHP8\Tag as Tag;

class Page
{
    use Seo, Tag;

    protected $title;
    protected $content;

    public function __construct(string $title = '', string $content = '')
    {
        $this->title = $title;
        $this->content = $content;
    }
}
