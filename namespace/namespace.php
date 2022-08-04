<?php
namespace PHP8;

const VERSION = '1.0';

function debug(array|object $obj) : void
{
    echo '<pre>';
    print_r($obj);
    echo '</pre>';
}

class Page
{
    protected $title;
    protected $content;

    public function __construct(string $title = '', string $content = '')
    {
        $this->title = $title;
        $this->content = $content;
    }
}
