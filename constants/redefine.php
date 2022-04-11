<?php
define('VALUE', 'Hello, world!');
define("VALUE", 1); // PHP Warning:  Constant VALUE already defined
echo VALUE;         // Hello, world!
