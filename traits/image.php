<?php
trait Image
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
