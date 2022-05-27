<?php
spl_autoload_register();

use Singleton\Settings;

Settings::get()->items_per_page = 20;
echo Settings::get()->items_per_page; // 20
