<?php
class ReflectionMethod extends ReflectionFunctionAbstract
{
    /* Константы */
    const int IS_STATIC = 16;
    const int IS_PUBLIC = 1;
    const int IS_PROTECTED = 2;
    const int IS_PRIVATE = 4;
    const int IS_ABSTRACT = 64;
    const int IS_FINAL = 32;

    /* Свойства */
    public string $class;

    /* Наследуемые свойства */
    public string $name;

    /* Методы */
    public __construct(object|string $objectOrMethod, string $method)
    public __construct(string $classMethod)
    public static export(
        string $class, string $name, bool $return = false): string
    public getClosure(?object $object = null): Closure
    public getDeclaringClass(): ReflectionClass
    public getModifiers(): int
    public getPrototype(): ReflectionMethod
    public invoke(?object $object, mixed ...$args): mixed
    public invokeArgs(?object $object, array $args): mixed
    public isAbstract(): bool
    public isConstructor(): bool
    public isDestructor(): bool
    public isFinal(): bool
    public isPrivate(): bool
    public isProtected(): bool
    public isPublic(): bool
    public isStatic(): bool
    public setAccessible(bool $accessible): void
    public __toString(): string

    /* Наследуемые методы */
    private ReflectionFunctionAbstract::__clone(): void
    public ReflectionFunctionAbstract::getAttributes(?string $name = null, int $flags = 0): array
    public ReflectionFunctionAbstract::getClosureScopeClass(): ?ReflectionClass
    public ReflectionFunctionAbstract::getClosureThis(): ?object
    public ReflectionFunctionAbstract::getClosureUsedVariables(): array
    public ReflectionFunctionAbstract::getDocComment(): string|false
    public ReflectionFunctionAbstract::getEndLine(): int|false
    public ReflectionFunctionAbstract::getExtension(): ?ReflectionExtension
    public ReflectionFunctionAbstract::getExtensionName(): string|false
    public ReflectionFunctionAbstract::getFileName(): string|false
    public ReflectionFunctionAbstract::getName(): string
    public ReflectionFunctionAbstract::getNamespaceName(): string
    public ReflectionFunctionAbstract::getNumberOfParameters(): int
    public ReflectionFunctionAbstract::getNumberOfRequiredParameters(): int
    public ReflectionFunctionAbstract::getParameters(): array
    public ReflectionFunctionAbstract::getReturnType(): ?ReflectionType
    public ReflectionFunctionAbstract::getShortName(): string
    public ReflectionFunctionAbstract::getStartLine(): int|false
    public ReflectionFunctionAbstract::getStaticVariables(): array
    public ReflectionFunctionAbstract::hasReturnType(): bool
    public ReflectionFunctionAbstract::inNamespace(): bool
    public ReflectionFunctionAbstract::isClosure(): bool
    public ReflectionFunctionAbstract::isDeprecated(): bool
    public ReflectionFunctionAbstract::isGenerator(): bool
    public ReflectionFunctionAbstract::isInternal(): bool
    public ReflectionFunctionAbstract::isUserDefined(): bool
    public ReflectionFunctionAbstract::isVariadic(): bool
    public ReflectionFunctionAbstract::returnsReference(): bool
    abstract public ReflectionFunctionAbstract::__toString(): void
}
