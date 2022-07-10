<?php
require_once('connect_db.php');

$query = 'CREATE TABLE catalogs (
           id SERIAL,
           name TEXT NOT NULL)';

$pdo->exec($query);
