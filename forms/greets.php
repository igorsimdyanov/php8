<?php
echo 'Привет, ' . htmlspecialchars($_GET['name'] ?? 'unknown') . '!';
