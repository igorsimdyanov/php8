<?php
$text = "Паро";
echo "Едет {$text}воз<br />";   // Едет Паровоз
echo "Плывет {$text}ход<br />"; // Плывет Пароход

echo "Едет $textвоз<br />";     // PHP Warning:  Undefined variable $textвоз
echo "Плывет $textход<br />";   // PHP Warning:  Undefined variable $textход
