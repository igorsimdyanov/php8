<?php
require_once 'backenduser.php';
require_once 'image.php';
require_once 'name.php';

class Moderator extends BackendUser
{
    use Image;
    use Name;

    public function fullName() : string
    {
        return parent::fullName() . '*';
    }
}
