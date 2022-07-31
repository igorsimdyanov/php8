<?php
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
        return $this->$index;
    }

    public function __set(string $index, string $value) : void
    {
        if (isset($this->$index)) {
            $this->$index = $value;
        } else {
            throw new Exception("Атрибут $index не существует");
        }
    }
}
