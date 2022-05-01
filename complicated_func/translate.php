<?php
$russian = [
    'число',
    'строка',
    'массив',
    'объект',
    'файл'
];
$english = [
    'number',
    'string',
    'array',
    'object',
    'file'
];

function translate(string $rus, string $eng) : string
{
    return "Для слова '$rus' перевод на английский - '$eng'";
}

echo '<pre>';
print_r(array_map('translate', $russian, $english));
echo '</pre>';
