<?php
class PasswordException extends Exception
{
    public function __construct(
        $message = 'Не допускается прямое обращение к свойству password'
    )
    {
        parent::__construct($message, 1002);
    }
}
