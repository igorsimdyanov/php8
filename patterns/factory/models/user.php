<?php
namespace Factory\Models;

class User extends \Factory\Router
{
    public function __construct(
        public string $email,
        private string $password,
        public ?string $first_name = null,
        public ?string $last_name = null)
    {}

    public function render() : string
    {
        $name = implode(' ', [$this->first_name, $this->last_name]);
        return '<strong>' . htmlspecialchars($name) . '</strong> ' .
               '(' . htmlspecialchars($this->email) . ')';
    }
}
