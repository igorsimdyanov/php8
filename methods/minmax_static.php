<?php
class MinMax
{
    public static function __callStatic(string $method, array $arr)
    {
        switch($method) {
            case 'min':
                return min($arr);
            case 'max':
                return max($arr);
            default:
                return null;
        }
    }
}
