<?php
require_once 'user.php';
require_once 'avatar.php';

class FrontUser extends User implements Avatar
{
    private $path;

    public function getImage() : string
    {
        return $this->path;
    }
    public function setImage(string $path) : void
    {
        $this->path = $path;
    }
}
