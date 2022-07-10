<?php
function headers(string $hostname) : array
{
    // Задаем адрес удаленного сервера
    $curl = curl_init($hostname);

    // Вернуть результат в виде строки
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // Включить в результат HTTP-заголовки
    curl_setopt($curl, CURLOPT_HEADER, true);
    // Исключить тело HTTP-документа
    curl_setopt($curl, CURLOPT_NOBODY, true);

    // Получаем HTTP-заголовки
    $headers = curl_exec($curl);
    // Закрываем CURL-соединение
    curl_close($curl);

    // Преобразуем строку $headers в массив
    return explode("\r\n", $headers);
}

$hostname = 'https://www.php.net';
$out = headers($hostname);

echo '<pre>';
print_r($out);
echo '</pre>';
