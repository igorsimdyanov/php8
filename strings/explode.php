<?php
$str = 'Имя, Фамилия, e-mail';
echo '<pre>';
print_r(explode(', ', $str)); // ['Имя', 'Фамилия', 'e-mail']
