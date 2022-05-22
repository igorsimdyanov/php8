<?php
require_once 'user.php';
require_once 'avatar.php';

class FrontUser extends User implements Avatar
{
    private $path;

    public function getImage()
    {
        return $this->path;
    }
    public function setImage($path)
    {
        $this->path = $path;
    }
}
