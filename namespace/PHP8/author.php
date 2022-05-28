<?php
namespace PHP8;

trait Author
{
    public function authors()
    {
        // $query = 'SELECT * FROM authors WHERE id IN(:ids)'
        echo 'Author::authors()<br />';
    }
}
