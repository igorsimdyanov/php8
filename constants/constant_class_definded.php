<?php
require_once('constant_class.php');

if (defined('ConstantClass::NAME')) {
    echo 'Константа определена<br />'; // true
} else {
    echo 'Константа не определена<br />';
}

if (defined('ConstantClass::POSITION')) {
    echo 'Константа определена<br />'; // false
} else {
    echo 'Константа не определена<br />';
}
