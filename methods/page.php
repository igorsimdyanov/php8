<?php
class Page
{
    static $content = 'about<br />';

    public static function footer()
    {
        return 'footer<br />';
    }

    public static function header()
    {
        return 'header<br />';
    }

    public static function render()
    {
        echo self::header() .
             self::$content .
             self::footer();
    }
}
