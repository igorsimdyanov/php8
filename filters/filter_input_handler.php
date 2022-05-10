<?php
$value = filter_input(
           INPUT_POST,
           'search',
           FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$result = filter_input(
    INPUT_POST,
    'search',
    FILTER_CALLBACK,
    [
        'options' => function ($value) {
            // Удаляем текст, меньше 3-х символов
            $value = (strlen($value) >= 3) ? $value : '';
            // Удаляем теги
            return strip_tags($value);
        }
    ]
);
