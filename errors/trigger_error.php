<?php
function print_age(int $age)
{
    $prefix = 'Функция print_age(): ';
    $error = 'возраст не может быть отрицательным';
    if ($age < 0) {
        trigger_error($prefix . $error, E_USER_ERROR);
    }

    echo "Возраст составляет: $age";
}

// Вызов функции с отрицательным аргументом
print_age(-10);
