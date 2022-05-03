<?php
class Counter
{
    private static $count = 0;

    public function __construct()
    {
        self::$count++;
    }
    public function __destruct()
    {
        self::$count--;
    }
    public static function getCount() : int
    {
        return self::$count;
    }
}

for ($objs = [], $i = 0; $i < 6; $i++) {
    $objs[] = new Counter();
}
echo "Сейчас существует {$objs[0]->getCount()} объектов.<br />";

$objs[5] = null;

echo "А теперь - {$objs[0]->getCount()} объектов.<br />";

$objs = [];

echo 'Под конец осталось - ' . Counter::getCount() .' объектов.<br />';
