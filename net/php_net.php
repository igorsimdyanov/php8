<?php
// Задаем адрес удаленного сервера
$curl = curl_init('https://www.php.net');
// Устанавливаем параметры соединения
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// Получаем содержимое страницы
$content = curl_exec($curl);
// Закрываем CURL-соединение
curl_close($curl);
// Выводим содержимое страницы
echo $content;
