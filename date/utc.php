<?php
// Вычисляет timestamp в Гринвиче, который соответствует
// локальному timestamp-формату
function local2utc($localStamp = false)
{
    if ($localStamp === false) $localStamp = time();

    // Получаем смещение часовой зоны в секундах
    $tzOffset = date('Z', $localStamp);

    // Вычитаем разницу - получаем время по UTC
    return $localStamp - $tzOffset;
}

// Вычисляет локальный timestamp в Гринвиче, который
// соответствует timestamp-формату по UTC. Можно указать
// смещение локальной зоны относительно UTC (в часах),
// тогда будет осуществлен перевод в эту зону
// (а не в текущую локальную).
function utc2local($gmStamp = false, $tzOffset = false)
{
    if ($gmStamp === false) return time();

    // Получаем смещение часовой зоны в секундах
    if ($tzOffset === false) {
        $tzOffset = date('Z', $gmStamp);
    } else {
        $tzOffset *= 60 * 60;
    }

    // Вычитаем разницу - получаем время по UTC
    return $gmStamp + $tzOffset;
}
