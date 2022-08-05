<?php
namespace Singleton;

final class Settings
{
    private static ?Settings $_object;
    private ?array $_settings;

    private function __construct()
    {
        $_settings = [];
    }

    private function __clone() {}

    public static function get() : Settings
    {
        self::$_object ??= new self();
        return self::$_object;
    }

    public function __get($key) : mixed
    {
        if (array_key_exists($key, $this->_settings)) {
            return $this->_settings[$key];
        } else {
            return null;
        }
    }

    public function __set($key, $value) : void
    {
        $this->_settings[$key] = $value;
    }
}
