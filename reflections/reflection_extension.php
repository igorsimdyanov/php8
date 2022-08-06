<?php
class ReflectionExtension implements Reflector
{
    /* Свойства */
    public string $name;

    /* Методы */
    public __construct(string $name)
    private __clone(): void
    public static export(string $name, string $return = false): string
    public getClasses(): array
    public getClassNames(): array
    public getConstants(): array
    public getDependencies(): array
    public getFunctions(): array
    public getINIEntries(): array
    public getName(): string
    public getVersion(): ?string
    public info(): void
    public isPersistent(): bool
    public isTemporary(): bool
    public __toString(): string
}
