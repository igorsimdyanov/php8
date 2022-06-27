<?php
trait Image
{
    private string $path;

    public function getImage() : string
    {
        return $this->path;
    }
    public function setImage(string $path) : void
    {
        $this->path = $path;
    }
}
