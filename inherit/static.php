<?php
class Base
{
    public static function title() : string
    {
        echo __CLASS__;
    }
    public static function test() : string
    {
        static::title();
    }
}

class Child extends Base
{
    public static function title() : string
    {
        echo __CLASS__;
    }
}

Child::test(); // Child
