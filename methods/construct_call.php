<?php
class Point {
    private $x;
    private $y;

    public function __construct()
    {
        echo 'Вызов конструктора<br />';
        $this->x = 0;
        $this->y = 0;
    }
    public function inner()
    {
        $this->__construct();
    }

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
