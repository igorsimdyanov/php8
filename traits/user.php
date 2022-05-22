<?php
class User
{
    public $first_name;
    public $last_name;
    public $email;
    private $password;

    public function __construct(
        $email,
        $password,
        $first_name = null,
        $last_name = null)
    {
        $this->first_name = $first_name;
        $this->last_name  = $last_name;
        $this->email      = $email;
        $this->password   = $password;
    }

    public function fullName() {
        $arr_name = array_filter([$this->first_name, $this->last_name]);
        $full_name = implode(' ', $arr_name);
        return $full_name ? $full_name : 'Анонимный пользователь';
    }
}
