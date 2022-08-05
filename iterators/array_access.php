<?php
interface ArrayAccess
{
    public offsetExists(mixed $offset): bool
    public offsetGet(mixed $offset): mixed
    public offsetSet(mixed $offset, mixed $value): void
    public offsetUnset(mixed $offset): void
}
