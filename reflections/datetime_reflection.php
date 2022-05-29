<?php
$datetime = new ReflectionClass('DateTime');
$object = $datetime->newInstance();

echo $object->format('d.m.Y H:i:s');
