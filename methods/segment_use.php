<?php
require 'segment_point.php';
require 'segment.php';

$segment = new Segment(begin: new Point(3, 5), end: new Point(4, 8));
echo "Отрезок: {$segment}<br />";

$segment = new Segment(new Point(3, 5), null);
echo "Отрезок: {$segment}<br />";
