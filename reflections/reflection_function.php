<?php
class ReflectionFunction extends ReflectionFunctionAbstract
{
    /* Константы */
    const int IS_DEPRECATED = 262144;

    /* Наследуемые свойства */
    public string $name;

    /* Методы */
    public __construct(Closure|string $function)
    public static export(string $name, string $return = ?): string
    public getClosure(): Closure
    public invoke(mixed ...$args): mixed
    public invokeArgs(array $args): mixed
    public isDisabled(): bool
    public __toString(): string

    /* Наследуемые методы */
    private ReflectionFunctionAbstract::__clone(): void
    public ReflectionFunctionAbstract::getAttributes(
        ?string $name = null,
        int $flags = 0): array
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
