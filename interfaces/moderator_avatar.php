<?php
require_once 'backenduser.php';
require_once 'avatar.php';

class Moderator extends BackendUser implements Avatar
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
