<?php
class Point
{
    private $x;
    private $y;

    public function setX($x)
    {
        $this->x = $x;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function distance()
    {
        return sqrt($this->getX() ** 2 + $this->getY() ** 2);
    }
}
