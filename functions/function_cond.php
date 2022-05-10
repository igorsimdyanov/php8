<?php
// Объявляем функцию convertToGrams() с 50% вероятностью
if (rand(0, 1) == 1) {
    function convertToGrams()
    {
        $result = 5 * 1_000;
        echo $result;
    }
}

echo convertToGrams();
