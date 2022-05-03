<?php
class Algorithm
{
    public static function distance(array $point) : float
    {
        return sqrt($point[0] ** 2 + $point[1] ** 2);
    }
}
