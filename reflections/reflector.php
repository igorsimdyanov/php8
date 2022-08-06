<?php
interface Reflector extends Stringable
{
    /* Методы */
    public static export(): string
    public __toString(): string
    /* Наследуемые методы */
    public Stringable::__toString(): string
}
