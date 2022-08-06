<?php
class ReflectionProperty implements Reflector
{
    /* Константы */
    const int IS_STATIC = 16;
    const int IS_PUBLIC = 1;
    const int IS_PROTECTED = 2;
    const int IS_PRIVATE = 4;

    /* Свойства */
    public string $name;
    public string $class;

    /* Методы */
    public __construct(object|string $class, string $property)
    private __clone(): void
    public static export(
        mixed $class,
        string $name,
        bool $return = ?): string
    public getAttributes(?string $name = null, int $flags = 0): array
    public getDeclaringClass(): ReflectionClass
    public getDefaultValue(): mixed
    public getDocComment(): string|false
    public getModifiers(): int
    public getName(): string
    public getType(): ?ReflectionType
    public getValue(?object $object = null): mixed
    public hasDefaultValue(): bool
    public hasType(): bool
    public isDefault(): bool
    public isInitialized(?object $object = null): bool
    public isPrivate(): bool
    public isPromoted(): bool
    public isProtected(): bool
    public isPublic(): bool
    public isReadOnly(): bool
    public isStatic(): bool
    public setAccessible(bool $accessible): void
    public setValue(object $object, mixed $value): void
    public setValue(mixed $value): void
    public __toString(): string
}
