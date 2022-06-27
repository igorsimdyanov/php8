<?php
interface Image
{
    public function setImage(string $path) : void;
    public function getImage() : string;
}
