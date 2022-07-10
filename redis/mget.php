<?php
require_once 'config.php';

$keys = $redis->keys('*');

echo '<pre>';
print_r($redis->mGet($keys));
echo '</pre>';
