<?php
class Kilogram {
    public function size()
    {
        return 1_000;
    }
}

class Kilobyte {
    public function size()
    {
        return 1_024;
    }
}


function convert($value, $factor = new Kilogram())
{
    return $value * $factor->size();
}

echo convert(11); // 11000
echo '<br />';
echo convert(11, new Kilobyte()); // 11264
