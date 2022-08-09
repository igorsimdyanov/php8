<?php
namespace Vendors\Storage;

class Storage
{
    const VERSION = '1.0';
    public function getVersion() : string
    {
        return self::VERSION;
    }
}
