<?php
require_once 'point.php';

$point = new Point;

echo '<pre>';
print_r(get_class_methods($point));
echo '</pre>';
