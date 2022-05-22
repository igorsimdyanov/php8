<?php
require_once('trait_tranlatable.php');
require_once('trait_sizable.php');

enum Rainbow
{
    use Translatable, Sizable;

    case Red;    // Красный
    case Оrange; // Оранжевый
    case Yellow; // Желтый
    case Green;  // Зеленый
    case Blue;   // Голубой
    case Indigo; // Синий
    case Violet; // Фиолетовый
}
