<?php
require_once('settings.php');

$settings = new Settings;

$settings->title = 'Название сайта';
$settings->keywords = ['PHP', 'Python', 'Ruby', 'JavaScript'];
$settings->per_page = 20;

echo '<pre>';
print_r($settings->list());
echo '</pre>';
