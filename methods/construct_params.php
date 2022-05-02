<?php
class Point {
    private $x;
    private $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setX(int $x) : void
    {
        $this->x = $x;
    }
    public function setY(int $y) : void
    {
        $this->y = $y;
    }
    public function getX() : int
    {
        return $this->x;
    }
    public function getY() : int
    {
        return $this->y;
    }
    public function distance() : float
    {
        return sqrt($this->getX() ** 2 + $this->getY() ** 2);
    }
}
