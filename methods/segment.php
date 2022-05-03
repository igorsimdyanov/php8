<?php
class Segment
{
    public function __construct(public ?Point $begin, public ?Point $end) {}
    public function __toString()
    {
        return "{$this->begin} ----- {$this->end}";
    }
}
