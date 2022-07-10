<?php
require_once 'config.php';

echo '<pre>';
print_r($redis->keys('*'));
echo '</pre>';
