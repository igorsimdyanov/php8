<?php
// Задаем адрес удаленного сервера
$curl = curl_init('https://www.php.net');
// Получаем содержимое страницы
echo curl_exec($curl);
// Закрываем CURL-соединение
curl_close($curl);
