<?php
echo 'Начало программы<br />';

try {
    // Код, в котором перехватываются исключения
    echo 'Все, что имеет начало...<br />';
    // Генерируем ("выбрасываем") исключение
    throw new Exception('Hello!');
    echo '...имеет и конец<br />';
} catch (Exception $exp) {
    // Код обработчика
    echo " Исключение: {$exp->getMessage()}<br />";
}

echo 'Конец программы<br />';
