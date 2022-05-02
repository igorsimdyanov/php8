<?php
class Point {
    private $x;
    private $y;

    public function getVariables() : array
    {
        return get_object_vars($this);
    }
}

$point = new Point;

$point->z = 5;

echo '<pre>';
print_r($point->getVariables());
echo '</pre>';
