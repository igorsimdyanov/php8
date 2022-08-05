<?php
interface Iterator extends Traversable
{
    public current(): mixed
    public key(): mixed
    public next(): void
    public rewind(): void
    public valid(): bool
}