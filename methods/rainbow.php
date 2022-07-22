<?php
class Rainbow
{
    private const COLORS = [
        'red' => 'красный',
        'orange' => 'оранжевый',
        'yellow' => 'желтый',
        'green' => 'зеленый',
        'blue' => 'голубой',
        'indigo' => 'синий',
        'violet' => 'фиолетовый'
    ];

    public function __get(string $key) : ?string
    {
        if (array_key_exists($key, Rainbow::COLORS)) {
            return Rainbow::COLORS[$key];
        } else {
            return null;
        }
    }
}
