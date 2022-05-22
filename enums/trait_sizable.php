<?php
trait Sizable
{
    public static function size(): int
    {
        return count(self::cases());
    }
}
