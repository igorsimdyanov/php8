<?php
session_start();

$_SESSION['name'] = 'value';
$_SESSION['arr'] = ['first', 'second', 'third'];

echo '<a href="session_get.php">другая страница</a>';
