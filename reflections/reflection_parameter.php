<?php
class ReflectionParameter implements Reflector
{
    /* Свойства */
    public string $name;

    /* Методы */
    public __construct(string|array|object $function, int|string $param)
    public allowsNull(): bool
    public canBePassedByValue(): bool
    private __clone(): void
    public static export(
        string $function,
        string $parameter,
        bool $return = ?): string
    public getAttributes(?string $name = null, int $flags = 0): array
    public getClass(): ?ReflectionClass
    public getDeclaringClass(): ?ReflectionClass
    public getDeclaringFunction(): ReflectionFunctionAbstract
    public getDefaultValue(): mixed
    public getDefaultValueConstantName(): ?string
    public getName(): string
    public getPosition(): int
    public getType(): ?ReflectionType
    public hasType(): bool
    public isArray(): bool
    public isCallable(): bool
    public isDefaultValueAvailable(): bool
    public isDefaultValueConstant(): bool
    public isOptional(): bool
    public isPassedByReference(): bool
    public isVariadic(): bool
    public __toString(): string
}
