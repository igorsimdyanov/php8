<?php
require 'segment_point.php';
require 'segment.php';

$segment = new Segment(new Point(3, 5), null);

echo "Начало: ({$segment->begin->x}, {$segment->begin->y})<br />";
echo "Окончание: ({$segment->end->x}, {$segment->end->y})<br />";
