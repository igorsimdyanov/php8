<?php
class ReflectionClass implements Reflector {
    /* Константы */
    const int IS_IMPLICIT_ABSTRACT = 16;
    const int IS_EXPLICIT_ABSTRACT = 32;
    const int IS_FINAL = 64;

    /* Свойства */
    public string $name;

    /* Методы */
    public __construct(object|string $objectOrClass)
    public static export(mixed $argument, bool $return = false): string
    public getAttributes(?string $name = null, int $flags = 0): array
    public getConstant(string $name): mixed
    public getConstants(?int $filter = null): array
    public getConstructor(): ?ReflectionMethod
    public getDefaultProperties(): array
    public getDocComment(): string|false
    public getEndLine(): int|false
    public getExtension(): ?ReflectionExtension
    public getExtensionName(): string|false
    public getFileName(): string|false
    public getInterfaceNames(): array
    public getInterfaces(): array
    public getMethod(string $name): ReflectionMethod
    public getMethods(?int $filter = null): array
    public getModifiers(): int
    public getName(): string
    public getNamespaceName(): string
    public getParentClass(): ReflectionClass|false
    public getProperties(?int $filter = null): array
    public getProperty(string $name): ReflectionProperty
    public getReflectionConstant(string $name): ReflectionClassConstant|false
    public getReflectionConstants(?int $filter = null): array
    public getShortName(): string
    public getStartLine(): int|false
    public getStaticProperties(): ?array
    public getStaticPropertyValue(
        string $name,
        mixed &$def_value = ?): mixed
    public getTraitAliases(): array
    public getTraitNames(): array
    public getTraits(): array
    public hasConstant(string $name): bool
    public hasMethod(string $name): bool
    public hasProperty(string $name): bool
    public implementsInterface(ReflectionClass|string $interface): bool
    public inNamespace(): bool
    public isAbstract(): bool
    public isAnonymous(): bool
    public isCloneable(): bool
    public isEnum(): bool
    public isFinal(): bool
    public isInstance(object $object): bool
    public isInstantiable(): bool
    public isInterface(): bool
    public isInternal(): bool
    public isIterable(): bool
    public isSubclassOf(ReflectionClass|string $class): bool
    public isTrait(): bool
    public isUserDefined(): bool
    public newInstance(mixed ...$args): object
    public newInstanceArgs(array $args = []): ?object
    public newInstanceWithoutConstructor(): object
    public setStaticPropertyValue(string $name, mixed $value): void
    public __toString(): string
}
