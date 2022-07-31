<?php 
interface BackedEnum extends UnitEnum
{
    /* Методы */
    public static from(int|string $value): static
    public static tryFrom(int|string $value): ?static
    /* Наследуемые методы */
    public static UnitEnum::cases(): array
}
