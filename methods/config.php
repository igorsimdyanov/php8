<?php
class Config {
}

$object = new Config;

$object->title = 'Название сайта';
$object->keywords = ['PHP', 'Python', 'Ruby', 'JavaScript'];
$object->per_page = 20;

echo '<pre>';
print_r((array)$object);
echo '<pre>';
