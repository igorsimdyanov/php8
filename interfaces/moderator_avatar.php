<?php
require_once 'backenduser.php';
require_once 'avatar.php';

class Moderator extends BackendUser implements Avatar
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
