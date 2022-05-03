<?php
class Point {
    private $x;
    private $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __get($key)
    {
        if($key == 'distance') {
            return sqrt($this->getX() ** 2 + $this->getY() ** 2);
        } else {
            return null;
        }

    }

    public function getX() : int
    {
        return $this->x;
    }
    public function getY() : int
    {
        return $this->y;
    }
}
