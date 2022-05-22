<?php
enum Rainbow
{
    case Red;    // Красный
    case Оrange; // Оранжевый
    case Yellow; // Желтый
    case Green;  // Зеленый
    case Blue;   // Голубой
    case Indigo; // Синий
    case Violet; // Фиолетовый

    public const Purple = self::Violet;
}
