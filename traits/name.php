<?php
trait Name
{
    public function fullName() : string
    {
        return parent::fullName() . ' (модератор)';
    }
}
