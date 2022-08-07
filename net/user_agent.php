<?php ## Передача пользовательского агента
// Задаем адрес удаленного сервера
$curl = curl_init('http://localhost:4000/handler.php');

// Устанавливаем User-Agent
$useragent = 'Mozilla/5.0 ' . 
             '(Windows NT 10.0; Win64; x64; rv:103.0) ' .
             'Gecko/20100101 Firefox/103.0';
curl_setopt($curl, CURLOPT_USERAGENT, $useragent);

// Выполняем запрос
curl_exec($curl);
// Закрываем CURL-соединение
curl_close($curl);
