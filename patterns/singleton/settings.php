<?php
namespace Singleton;

final class Settings
{
    private static $_object = null;
    private $_settings;

    private function __construct()
    {
        $_settings = [];
    }

    private function __clone() {}

    public static function get()
    {
        if (is_null(self::$_object)) {
            self::$_object = new self();
        }

        return self::$_object;
    }

    public function __get($key)
    {
        if(array_key_exists($key, $this->_settings)) {
            return $this->_settings[$key];
        } else {
            return null;
        }
    }

    public function __set($key, $value)
    {
        $this->_settings[$key] = $value;
    }
}
