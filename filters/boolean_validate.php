<?php
$arr = [
    filter_var('yes', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE),
    filter_var('no', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE),
    filter_var('Hello', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)
];
echo '<pre>';
var_dump($arr);
echo '</pre>';
