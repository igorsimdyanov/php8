<?php
namespace PHP8\constants
{
    const VERSION = '1.0';
}

namespace PHP8\functions
{
    function debug(array|object $obj) : void
    {
        echo '<pre>';
        print_r($obj);
        echo '</pre>';
    }
}

namespace PHP8\classes
{
    class Page
    {
        protected $title;
        protected $content;
        public function __construct(
            string $title = '',
            string $content = ''
        )
        {
            $this->title = $title;
            $this->content = $content;
        }
    }
}
