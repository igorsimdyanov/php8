<?php
interface Avatar
{
    public function setImage(string $path) : void;
    public function getImage() : string;
}
