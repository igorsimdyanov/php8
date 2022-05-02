<?php
class Connection
{
    public function __construct()
    {
        echo 'Вызов конструктора<br />';
    }
    public function __destruct()
    {
        echo 'Вызов деструктора<br />';
    }
}
