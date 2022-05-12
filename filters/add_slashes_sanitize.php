<?php
$arr = [
    'Deb\'s files',
    'Symbol \\',
    'print "Hello world!"'
];

echo '<pre>';
print_r($arr);
echo '<pre>';

$result = filter_var_array($arr, FILTER_SANITIZE_ADD_SLASHES);

echo '<pre>';
print_r($result);
echo '<pre>';
