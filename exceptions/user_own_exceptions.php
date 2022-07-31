<?php
require_once 'attribute_exception.php';
require_once 'password_exception.php';

class User
{
    public function __construct(
         private string $email,
         private string $password,
         private ?string $first_name = null,
         private ?string $last_name = null)
    {
    }

    public function __get(string $index) : ?string
    {
        if ($index == 'password') {
            throw new PasswordException;
        }
        if (isset($this->$index)) {
            return $this->$index;
        } else {
            throw new AttributeException($index);
        }
    }

    public function __set(string $index, string $value) : void
    {
        if (isset($this->$index)) {
            $this->$index = $value;
        } else {
            throw new AttributeException($index);
        }
    }

    public function isPasswordCorrect($password)
    {
        return $this->password == $password;
    }
}
