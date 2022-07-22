<?php
class Settings
{
    private array $properties;

    public function __get(string $key) : ?string
    {
        if (array_key_exists($key, $this->properties)) {
            return $this->properties[$key];
        } else {
            return null;
        }
    }

    public function __set(string $key, mixed $value) : void
    {
        $this->properties[$key] = $value;
    }

    public function list() : array
    {
        return $this->properties;
    }   
}
