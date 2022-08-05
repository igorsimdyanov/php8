<?php
interface IteratorAggregate extends Traversable
{
    public getIterator(): Traversable
}
