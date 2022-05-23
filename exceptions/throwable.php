<?php
class Exception implements Throwable
{
    protected string $message = "";      // Сообшение
    private string $string = "";         // Свойство для __toString
    protected int $code;                 // Код исключения
    protected string $file = "";         // Файл, в котором произошло исключение
    protected int $line;                 // Строка, в которой произошло исключение
    private array $trace = [];           // Трассировка вызовов методов и функций
    private ?Throwable $previous = null; // Предыдущее исключение (вложенные try-блоки)

    public __construct(
        string $message = "",
        int $code = 0,
        ?Throwable $previous = null
    )

    // Запрещает клонировать исключения
    private __clone(): void

    final public getMessage(): string
    final public getPrevious(): ?Throwable
    final public getCode(): int
    final public getFile(): string
    final public getLine(): int
    final public getTrace(): array
    final public getTraceAsString(): string
    public __toString(): string
}
