<?php
// Содержимое POST-запроса
$body = 'first_name=Игорь&last_name=Симдянов';
// Параметры контекста
$opts = [
    'http' => [
        'method' => 'POST',
        'user_agent' => 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:42.0)',
        'header' => 'Content-Type: ' .
                    "application/x-www-form-urlencoded\r\n" .
                    'Content-Length: ' . mb_strlen($body),
        'content' => $body
    ]
];
// Формируем контекст
$context = stream_context_create($opts);
// Отправляем запрос
echo file_get_contents(
    'http://localhost:4000/handler.php',
    false,
    $context
);
