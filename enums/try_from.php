<?php
require_once 'scalar.php';

$col = Rainbow::tryFrom('Не существующее значение');
echo $col?->name; // null
