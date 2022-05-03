<?php
class Point
{
    public function __construct(public int $x = 0, public int $y = 0) {}

    public function __toString()
    {
        return "({$this->x},{$this->y})";
    }
}
