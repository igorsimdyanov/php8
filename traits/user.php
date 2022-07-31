<?php
class User
{
    public function __construct(
        public string $email,
        private string $password,
        public ?string $first_name = null,
        public ?string $last_name = null)
    {}

    public function fullName() : string
    {
        $arr_name = array_filter([$this->first_name, $this->last_name]);
        $full_name = implode(' ', $arr_name);
        return empty($full_name) ? 'Анонимный пользователь' : $full_name;
    }
}
