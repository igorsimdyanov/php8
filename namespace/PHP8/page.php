<?php
namespace PHP8;
use \PHP8\Seo as Seo;
use \PHP8\Author as Author;

class Page
{
    use Seo, Author;

    public function __construct(
        protected string $title = '',
        protected string $content = ''
    ) {}
}
