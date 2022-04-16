<?php
echo 0 == '0';    // true
echo 0 == '0.0';  // true
echo 0.0 == '0';  // true
echo 0 == 'one';  // false
echo 0 == '';     // false
echo 42 == ' 42'; // true
echo 42 == '42b'; // false
