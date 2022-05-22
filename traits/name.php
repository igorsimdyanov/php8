<?php
trait Name
{
    public function fullName()
    {
        return parent::fullName() . ' (модератор)';
    }
}
