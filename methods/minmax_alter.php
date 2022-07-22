<?php
class MinMax
{
    public function __call(string $method, array $arr)
    {
        switch ($method) {
            case 'min':
                return min($arr);
            case 'max':
                return max($arr);
            default:
                return null;
        }
    }
}
